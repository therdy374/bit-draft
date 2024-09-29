<script>
        let creditLimit = <?php echo $creditLimit; ?>;
        let previousPrice = 0; // Store the previous price for comparison
        let selectedPercentage = 0; // Store the selected percentage
        let isProcessing = false; // Prevent multiple submissions

        // Function to fetch Bitcoin price every second
        function fetchBitcoinPrice() {
            const apiUrl = '?action=get_btc_price';

            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.price) {
                        const currentPrice = parseFloat(data.price);
                        displayPriceChange(currentPrice);
                        previousPrice = currentPrice; // Update previous price for the next comparison
                    } else {
                        document.getElementById('btc-price').innerText = 'Error fetching Bitcoin price';
                    }
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                });
        }

        // Function to display price and highlight the changes
        function displayPriceChange(currentPrice) {
            const priceElement = document.getElementById('btc-price');
            const iconElement = document.getElementById('price-change-icon');

            // Update the price
            priceElement.innerText = `$${currentPrice.toFixed(2)}`;

            // Compare with the previous price and highlight change
            if (previousPrice) {
                if (currentPrice > previousPrice) {
                    priceElement.style.color = 'blue'; // Price went up
                    iconElement.className = 'fas fa-arrow-up price-change-icon price-up';
                } else if (currentPrice < previousPrice) {
                    priceElement.style.color = 'red'; // Price went down
                    iconElement.className = 'fas fa-arrow-down price-change-icon price-down';
                } else {
                    priceElement.style.color = 'black'; // No change
                    iconElement.className = 'fas fa-minus price-change-icon';
                }
            }
        }

        // Calculate USD and BTC amounts dynamically
        function calculateUsd(percentage) {
            selectedPercentage = percentage;
            let usdAmount = (creditLimit * percentage) / 100;
            document.getElementById('calculated-usd').value = usdAmount.toFixed(2); // Display the calculated USD
            document.getElementById('credit-limit-percentage').innerText = `Your Credit Limit: ${percentage}%`;

            // Fetch the current Bitcoin price to calculate the BTC amount
            const apiUrl = '?action=get_btc_price';
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    if (data.price) {
                        const btcPrice = parseFloat(data.price);
                        const btcAmount = usdAmount / btcPrice; // Calculate BTC amount

                        // Update the display for USD and BTC amounts
                        document.getElementById('calculated-percentage-usd').innerText =
                            `USD Amount for ${percentage}%: $${usdAmount.toFixed(2)}, BTC Amount: ${btcAmount.toFixed(8)} BTC`;
                    } else {
                        document.getElementById('calculated-percentage-usd').innerText = `Error fetching Bitcoin price`;
                    }
                })
                .catch(error => {
                    console.error('Error fetching Bitcoin price:', error);
                });
        }

        // Function to submit purchase
        function submitPurchase(event) {
            if (isProcessing) return; // Prevent multiple submissions
            isProcessing = true;

            // Prevent default form submission behavior if event is passed
            if (event) {
                event.preventDefault();
            }

            const formData = new FormData();
            formData.append('percentage', selectedPercentage);

            fetch('', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        Swal.fire({
                            title: 'Purchase Successful!',
                            text: `You bought ${data.btcAmount} BTC for $${data.usdAmount} USD at a price of $${data.btcPrice} per BTC.\n\n` +
                                `Your updated credit limit is $${data.newCreditLimit}.\n\n` +
                                `Total USD Amount Computed by ${selectedPercentage}% is: $${data.usdAmount}, BTC Amount: ${data.btcAmount} BTC`,
                            icon: 'success',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Refresh the page
                                window.location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            title: 'Error!',
                            text: data.error,
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });
                    }
                })
                .catch(error => {
                    console.error('Error during purchase:', error);
                    Swal.fire({
                        title: 'Error!',
                        text: 'An error occurred during the purchase. Please try again.',
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                })
                .finally(() => {
                    isProcessing = false; // Allow further submissions
                });
        }

        // Ensure to attach the function properly to avoid unwanted form behavior
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelector('button[onclick="submitPurchase()"]').addEventListener('click', submitPurchase);
        });

        // Fetch the Bitcoin price every second
        setInterval(fetchBitcoinPrice, 1000); // Update price every 1 second

        // Call this once to initialize the price on page load
        window.onload = fetchBitcoinPrice;
    </script>