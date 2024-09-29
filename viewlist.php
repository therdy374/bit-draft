<html lang="zxx">

<head></head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="nosnippet">
<meta name="robots" content="noarchive">
<meta name="robots" content="noindex, nofollow">
<title>bit-pro</title>



<script>
    function comment_del(cno) {
        if (confirm('삭제 하시겠습니까?')) {
            document.getElementById("cpContent_hdnCno").value = cno;
        }
    }

    function reply(seq, depth, userid, nick) {
        var befrSeq = document.getElementById('cpContent_hdnSeq').value;
        if (befrSeq == seq) {
            document.getElementById("comment_0").innerHTML = document.getElementById("comment_" + befrSeq).innerHTML;
            document.getElementById("comment_" + befrSeq).innerHTML = "";
            document.getElementById("cpContent_hdnCno").value = "0";
            document.getElementById("cpContent_hdnSeq").value = 0;
            document.getElementById("cpContent_hdnDepth").value = 0;
            document.getElementById("cpContent_hdnReplyUserId").value = "";
            document.getElementById("cpContent_hdnReplyNick").value = "";
        }
        else {
            document.getElementById("comment_" + seq).innerHTML = document.getElementById("comment_" + befrSeq).innerHTML;
            document.getElementById("comment_" + befrSeq).innerHTML = "";
            document.getElementById("cpContent_hdnCno").value = "0";
            document.getElementById("cpContent_hdnSeq").value = seq;
            document.getElementById("cpContent_hdnDepth").value = depth;
            document.getElementById("cpContent_hdnReplyUserId").value = userid;
            document.getElementById("cpContent_hdnReplyNick").value = nick;
        }
        document.getElementById("cpContent_txtContent").value = "";
    }

    function modify(cno) {
        document.getElementById("cpContent_hdnCno").value = cno;
        document.getElementById("cpContent_txtContent").value = stripTag(document.getElementById("comment_content_" + cno).innerHTML.replace(/<br>/g, '\r\n'));
        document.getElementById("cpContent_txtContent").scrollIntoView(true);
    }
</script>


<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    .swal2-popup.swal2-toast {
        box-sizing: border-box;
        grid-column: 1/4 !important;
        grid-row: 1/4 !important;
        grid-template-columns: min-content auto min-content;
        padding: 1em;
        overflow-y: hidden;
        background: #fff;
        box-shadow: 0 0 1px rgba(0, 0, 0, .075), 0 1px 2px rgba(0, 0, 0, .075), 1px 2px 4px rgba(0, 0, 0, .075), 1px 3px 8px rgba(0, 0, 0, .075), 2px 4px 16px rgba(0, 0, 0, .075);
        pointer-events: all
    }

    .swal2-popup.swal2-toast>* {
        grid-column: 2
    }

    .swal2-popup.swal2-toast .swal2-title {
        margin: .5em 1em;
        padding: 0;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-loading {
        justify-content: center
    }

    .swal2-popup.swal2-toast .swal2-input {
        height: 2em;
        margin: .5em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-validation-message {
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-footer {
        margin: .5em 0 0;
        padding: .5em 0 0;
        font-size: .8em
    }

    .swal2-popup.swal2-toast .swal2-close {
        grid-column: 3/3;
        grid-row: 1/99;
        align-self: center;
        width: .8em;
        height: .8em;
        margin: 0;
        font-size: 2em
    }

    .swal2-popup.swal2-toast .swal2-html-container {
        margin: .5em 1em;
        padding: 0;
        overflow: initial;
        font-size: 1em;
        text-align: initial
    }

    .swal2-popup.swal2-toast .swal2-html-container:empty {
        padding: 0
    }

    .swal2-popup.swal2-toast .swal2-loader {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        height: 2em;
        margin: .25em
    }

    .swal2-popup.swal2-toast .swal2-icon {
        grid-column: 1;
        grid-row: 1/99;
        align-self: center;
        width: 2em;
        min-width: 2em;
        height: 2em;
        margin: 0 .5em 0 0
    }

    .swal2-popup.swal2-toast .swal2-icon .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 1.8em;
        font-weight: bold
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line] {
        top: .875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: .3125em
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: .3125em
    }

    .swal2-popup.swal2-toast .swal2-actions {
        justify-content: flex-start;
        height: auto;
        margin: 0;
        margin-top: .5em;
        padding: 0 .5em
    }

    .swal2-popup.swal2-toast .swal2-styled {
        margin: .25em .5em;
        padding: .4em .6em;
        font-size: 1em
    }

    .swal2-popup.swal2-toast .swal2-success {
        border-color: #a5dc86
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 1.6em;
        height: 3em;
        border-radius: 50%
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.8em;
        left: -0.5em;
        transform: rotate(-45deg);
        transform-origin: 2em 2em;
        border-radius: 4em 0 0 4em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.25em;
        left: .9375em;
        transform-origin: 0 1.5em;
        border-radius: 0 4em 4em 0
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
        width: 2em;
        height: 2em
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
        top: 0;
        left: .4375em;
        width: .4375em;
        height: 2.6875em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line] {
        height: .3125em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip] {
        top: 1.125em;
        left: .1875em;
        width: .75em
    }

    .swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long] {
        top: .9375em;
        right: .1875em;
        width: 1.375em
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-toast-animate-success-line-tip .75s
    }

    .swal2-popup.swal2-toast .swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-toast-animate-success-line-long .75s
    }

    .swal2-popup.swal2-toast.swal2-show {
        animation: swal2-toast-show .5s
    }

    .swal2-popup.swal2-toast.swal2-hide {
        animation: swal2-toast-hide .1s forwards
    }

    div:where(.swal2-container) {
        display: grid;
        position: fixed;
        z-index: 1060;
        inset: 0;
        box-sizing: border-box;
        grid-template-areas: "top-start     top            top-end" "center-start  center         center-end" "bottom-start  bottom-center  bottom-end";
        grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
        height: 100%;
        padding: .625em;
        overflow-x: hidden;
        transition: background-color .1s;
        -webkit-overflow-scrolling: touch
    }

    div:where(.swal2-container).swal2-backdrop-show,
    div:where(.swal2-container).swal2-noanimation {
        background: rgba(0, 0, 0, .4)
    }

    div:where(.swal2-container).swal2-backdrop-hide {
        background: rgba(0, 0, 0, 0) !important
    }

    div:where(.swal2-container).swal2-top-start,
    div:where(.swal2-container).swal2-center-start,
    div:where(.swal2-container).swal2-bottom-start {
        grid-template-columns: minmax(0, 1fr) auto auto
    }

    div:where(.swal2-container).swal2-top,
    div:where(.swal2-container).swal2-center,
    div:where(.swal2-container).swal2-bottom {
        grid-template-columns: auto minmax(0, 1fr) auto
    }

    div:where(.swal2-container).swal2-top-end,
    div:where(.swal2-container).swal2-center-end,
    div:where(.swal2-container).swal2-bottom-end {
        grid-template-columns: auto auto minmax(0, 1fr)
    }

    div:where(.swal2-container).swal2-top-start>.swal2-popup {
        align-self: start
    }

    div:where(.swal2-container).swal2-top>.swal2-popup {
        grid-column: 2;
        place-self: start center
    }

    div:where(.swal2-container).swal2-top-end>.swal2-popup,
    div:where(.swal2-container).swal2-top-right>.swal2-popup {
        grid-column: 3;
        place-self: start end
    }

    div:where(.swal2-container).swal2-center-start>.swal2-popup,
    div:where(.swal2-container).swal2-center-left>.swal2-popup {
        grid-row: 2;
        align-self: center
    }

    div:where(.swal2-container).swal2-center>.swal2-popup {
        grid-column: 2;
        grid-row: 2;
        place-self: center center
    }

    div:where(.swal2-container).swal2-center-end>.swal2-popup,
    div:where(.swal2-container).swal2-center-right>.swal2-popup {
        grid-column: 3;
        grid-row: 2;
        place-self: center end
    }

    div:where(.swal2-container).swal2-bottom-start>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-left>.swal2-popup {
        grid-column: 1;
        grid-row: 3;
        align-self: end
    }

    div:where(.swal2-container).swal2-bottom>.swal2-popup {
        grid-column: 2;
        grid-row: 3;
        place-self: end center
    }

    div:where(.swal2-container).swal2-bottom-end>.swal2-popup,
    div:where(.swal2-container).swal2-bottom-right>.swal2-popup {
        grid-column: 3;
        grid-row: 3;
        place-self: end end
    }

    div:where(.swal2-container).swal2-grow-row>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
        grid-column: 1/4;
        width: 100%
    }

    div:where(.swal2-container).swal2-grow-column>.swal2-popup,
    div:where(.swal2-container).swal2-grow-fullscreen>.swal2-popup {
        grid-row: 1/4;
        align-self: stretch
    }

    div:where(.swal2-container).swal2-no-transition {
        transition: none !important
    }

    div:where(.swal2-container) div:where(.swal2-popup) {
        display: none;
        position: relative;
        box-sizing: border-box;
        grid-template-columns: minmax(0, 100%);
        width: 32em;
        max-width: 100%;
        padding: 0 0 1.25em;
        border: none;
        border-radius: 5px;
        background: #fff;
        color: #545454;
        font-family: inherit;
        font-size: 1rem
    }

    div:where(.swal2-container) div:where(.swal2-popup):focus {
        outline: none
    }

    div:where(.swal2-container) div:where(.swal2-popup).swal2-loading {
        overflow-y: hidden
    }

    div:where(.swal2-container) h2:where(.swal2-title) {
        position: relative;
        max-width: 100%;
        margin: 0;
        padding: .8em 1em 0;
        color: inherit;
        font-size: 1.875em;
        font-weight: 600;
        text-align: center;
        text-transform: none;
        word-wrap: break-word
    }

    div:where(.swal2-container) div:where(.swal2-actions) {
        display: flex;
        z-index: 1;
        box-sizing: border-box;
        flex-wrap: wrap;
        align-items: center;
        justify-content: center;
        width: auto;
        margin: 1.25em auto 0;
        padding: 0
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled[disabled] {
        opacity: .4
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:hover {
        background-image: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1))
    }

    div:where(.swal2-container) div:where(.swal2-actions):not(.swal2-loading) .swal2-styled:active {
        background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.2))
    }

    div:where(.swal2-container) div:where(.swal2-loader) {
        display: none;
        align-items: center;
        justify-content: center;
        width: 2.2em;
        height: 2.2em;
        margin: 0 1.875em;
        animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
        border-width: .25em;
        border-style: solid;
        border-radius: 100%;
        border-color: #2778c4 rgba(0, 0, 0, 0) #2778c4 rgba(0, 0, 0, 0)
    }

    div:where(.swal2-container) button:where(.swal2-styled) {
        margin: .3125em;
        padding: .625em 1.1em;
        transition: box-shadow .1s;
        box-shadow: 0 0 0 3px rgba(0, 0, 0, 0);
        font-weight: 500
    }

    div:where(.swal2-container) button:where(.swal2-styled):not([disabled]) {
        cursor: pointer
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm) {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #7066e0;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-confirm):focus-visible {
        box-shadow: 0 0 0 3px rgba(112, 102, 224, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-deny) {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #dc3741;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-deny):focus-visible {
        box-shadow: 0 0 0 3px rgba(220, 55, 65, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-cancel) {
        border: 0;
        border-radius: .25em;
        background: initial;
        background-color: #6e7881;
        color: #fff;
        font-size: 1em
    }

    div:where(.swal2-container) button:where(.swal2-styled):where(.swal2-cancel):focus-visible {
        box-shadow: 0 0 0 3px rgba(110, 120, 129, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled).swal2-default-outline:focus-visible {
        box-shadow: 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-styled):focus-visible {
        outline: none
    }

    div:where(.swal2-container) button:where(.swal2-styled)::-moz-focus-inner {
        border: 0
    }

    div:where(.swal2-container) div:where(.swal2-footer) {
        margin: 1em 0 0;
        padding: 1em 1em 0;
        border-top: 1px solid #eee;
        color: inherit;
        font-size: 1em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-timer-progress-bar-container {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        grid-column: auto !important;
        overflow: hidden;
        border-bottom-right-radius: 5px;
        border-bottom-left-radius: 5px
    }

    div:where(.swal2-container) div:where(.swal2-timer-progress-bar) {
        width: 100%;
        height: .25em;
        background: rgba(0, 0, 0, .2)
    }

    div:where(.swal2-container) img:where(.swal2-image) {
        max-width: 100%;
        margin: 2em auto 1em
    }

    div:where(.swal2-container) button:where(.swal2-close) {
        z-index: 2;
        align-items: center;
        justify-content: center;
        width: 1.2em;
        height: 1.2em;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: -1.2em;
        padding: 0;
        overflow: hidden;
        transition: color .1s, box-shadow .1s;
        border: none;
        border-radius: 5px;
        background: rgba(0, 0, 0, 0);
        color: #ccc;
        font-family: monospace;
        font-size: 2.5em;
        cursor: pointer;
        justify-self: end
    }

    div:where(.swal2-container) button:where(.swal2-close):hover {
        transform: none;
        background: rgba(0, 0, 0, 0);
        color: #f27474
    }

    div:where(.swal2-container) button:where(.swal2-close):focus-visible {
        outline: none;
        box-shadow: inset 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) button:where(.swal2-close)::-moz-focus-inner {
        border: 0
    }

    div:where(.swal2-container) .swal2-html-container {
        z-index: 1;
        justify-content: center;
        margin: 0;
        padding: 1em 1.6em .3em;
        overflow: auto;
        color: inherit;
        font-size: 1.125em;
        font-weight: normal;
        line-height: normal;
        text-align: center;
        word-wrap: break-word;
        word-break: break-word
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea),
    div:where(.swal2-container) select:where(.swal2-select),
    div:where(.swal2-container) div:where(.swal2-radio),
    div:where(.swal2-container) label:where(.swal2-checkbox) {
        margin: 1em 2em 3px
    }

    div:where(.swal2-container) input:where(.swal2-input),
    div:where(.swal2-container) input:where(.swal2-file),
    div:where(.swal2-container) textarea:where(.swal2-textarea) {
        box-sizing: border-box;
        width: auto;
        transition: border-color .1s, box-shadow .1s;
        border: 1px solid #d9d9d9;
        border-radius: .1875em;
        background: rgba(0, 0, 0, 0);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    div:where(.swal2-container) input:where(.swal2-input).swal2-inputerror,
    div:where(.swal2-container) input:where(.swal2-file).swal2-inputerror,
    div:where(.swal2-container) textarea:where(.swal2-textarea).swal2-inputerror {
        border-color: #f27474 !important;
        box-shadow: 0 0 2px #f27474 !important
    }

    div:where(.swal2-container) input:where(.swal2-input):focus,
    div:where(.swal2-container) input:where(.swal2-file):focus,
    div:where(.swal2-container) textarea:where(.swal2-textarea):focus {
        border: 1px solid #b4dbed;
        outline: none;
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, .06), 0 0 0 3px rgba(100, 150, 200, .5)
    }

    div:where(.swal2-container) input:where(.swal2-input)::placeholder,
    div:where(.swal2-container) input:where(.swal2-file)::placeholder,
    div:where(.swal2-container) textarea:where(.swal2-textarea)::placeholder {
        color: #ccc
    }

    div:where(.swal2-container) .swal2-range {
        margin: 1em 2em 3px;
        background: #fff
    }

    div:where(.swal2-container) .swal2-range input {
        width: 80%
    }

    div:where(.swal2-container) .swal2-range output {
        width: 20%;
        color: inherit;
        font-weight: 600;
        text-align: center
    }

    div:where(.swal2-container) .swal2-range input,
    div:where(.swal2-container) .swal2-range output {
        height: 2.625em;
        padding: 0;
        font-size: 1.125em;
        line-height: 2.625em
    }

    div:where(.swal2-container) .swal2-input {
        height: 2.625em;
        padding: 0 .75em
    }

    div:where(.swal2-container) .swal2-file {
        width: 75%;
        margin-right: auto;
        margin-left: auto;
        background: rgba(0, 0, 0, 0);
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-textarea {
        height: 6.75em;
        padding: .75em
    }

    div:where(.swal2-container) .swal2-select {
        min-width: 50%;
        max-width: 100%;
        padding: .375em .625em;
        background: rgba(0, 0, 0, 0);
        color: inherit;
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio,
    div:where(.swal2-container) .swal2-checkbox {
        align-items: center;
        justify-content: center;
        background: #fff;
        color: inherit
    }

    div:where(.swal2-container) .swal2-radio label,
    div:where(.swal2-container) .swal2-checkbox label {
        margin: 0 .6em;
        font-size: 1.125em
    }

    div:where(.swal2-container) .swal2-radio input,
    div:where(.swal2-container) .swal2-checkbox input {
        flex-shrink: 0;
        margin: 0 .4em
    }

    div:where(.swal2-container) label:where(.swal2-input-label) {
        display: flex;
        justify-content: center;
        margin: 1em auto 0
    }

    div:where(.swal2-container) div:where(.swal2-validation-message) {
        align-items: center;
        justify-content: center;
        margin: 1em 0 0;
        padding: .625em;
        overflow: hidden;
        background: #f0f0f0;
        color: #666;
        font-size: 1em;
        font-weight: 300
    }

    div:where(.swal2-container) div:where(.swal2-validation-message)::before {
        content: "!";
        display: inline-block;
        width: 1.5em;
        min-width: 1.5em;
        height: 1.5em;
        margin: 0 .625em;
        border-radius: 50%;
        background-color: #f27474;
        color: #fff;
        font-weight: 600;
        line-height: 1.5em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps {
        flex-wrap: wrap;
        align-items: center;
        max-width: 100%;
        margin: 1.25em auto;
        padding: 0;
        background: rgba(0, 0, 0, 0);
        font-weight: 600
    }

    div:where(.swal2-container) .swal2-progress-steps li {
        display: inline-block;
        position: relative
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step {
        z-index: 20;
        flex-shrink: 0;
        width: 2em;
        height: 2em;
        border-radius: 2em;
        background: #2778c4;
        color: #fff;
        line-height: 2em;
        text-align: center
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step {
        background: #2778c4
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step {
        background: #add8e6;
        color: #fff
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step.swal2-active-progress-step~.swal2-progress-step-line {
        background: #add8e6
    }

    div:where(.swal2-container) .swal2-progress-steps .swal2-progress-step-line {
        z-index: 10;
        flex-shrink: 0;
        width: 2.5em;
        height: .4em;
        margin: 0 -1px;
        background: #2778c4
    }

    div:where(.swal2-icon) {
        position: relative;
        box-sizing: content-box;
        justify-content: center;
        width: 5em;
        height: 5em;
        margin: 2.5em auto .6em;
        border: 0.25em solid rgba(0, 0, 0, 0);
        border-radius: 50%;
        border-color: #000;
        font-family: inherit;
        line-height: 5em;
        cursor: default;
        user-select: none
    }

    div:where(.swal2-icon) .swal2-icon-content {
        display: flex;
        align-items: center;
        font-size: 3.75em
    }

    div:where(.swal2-icon).swal2-error {
        border-color: #f27474;
        color: #f27474
    }

    div:where(.swal2-icon).swal2-error .swal2-x-mark {
        position: relative;
        flex-grow: 1
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line] {
        display: block;
        position: absolute;
        top: 2.3125em;
        width: 2.9375em;
        height: .3125em;
        border-radius: .125em;
        background-color: #f27474
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=left] {
        left: 1.0625em;
        transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-error [class^=swal2-x-mark-line][class$=right] {
        right: 1em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-error.swal2-icon-show .swal2-x-mark {
        animation: swal2-animate-error-x-mark .5s
    }

    div:where(.swal2-icon).swal2-warning {
        border-color: #facea8;
        color: #f8bb86
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-warning.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .5s
    }

    div:where(.swal2-icon).swal2-info {
        border-color: #9de0f6;
        color: #3fc3ee
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-info.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-i-mark .8s
    }

    div:where(.swal2-icon).swal2-question {
        border-color: #c9dae1;
        color: #87adbd
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show {
        animation: swal2-animate-error-icon .5s
    }

    div:where(.swal2-icon).swal2-question.swal2-icon-show .swal2-icon-content {
        animation: swal2-animate-question-mark .8s
    }

    div:where(.swal2-icon).swal2-success {
        border-color: #a5dc86;
        color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line] {
        position: absolute;
        width: 3.75em;
        height: 7.5em;
        border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=left] {
        top: -0.4375em;
        left: -2.0635em;
        transform: rotate(-45deg);
        transform-origin: 3.75em 3.75em;
        border-radius: 7.5em 0 0 7.5em
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-circular-line][class$=right] {
        top: -0.6875em;
        left: 1.875em;
        transform: rotate(-45deg);
        transform-origin: 0 3.75em;
        border-radius: 0 7.5em 7.5em 0
    }

    div:where(.swal2-icon).swal2-success .swal2-success-ring {
        position: absolute;
        z-index: 2;
        top: -0.25em;
        left: -0.25em;
        box-sizing: content-box;
        width: 100%;
        height: 100%;
        border: .25em solid rgba(165, 220, 134, .3);
        border-radius: 50%
    }

    div:where(.swal2-icon).swal2-success .swal2-success-fix {
        position: absolute;
        z-index: 1;
        top: .5em;
        left: 1.625em;
        width: .4375em;
        height: 5.625em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line] {
        display: block;
        position: absolute;
        z-index: 2;
        height: .3125em;
        border-radius: .125em;
        background-color: #a5dc86
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=tip] {
        top: 2.875em;
        left: .8125em;
        width: 1.5625em;
        transform: rotate(45deg)
    }

    div:where(.swal2-icon).swal2-success [class^=swal2-success-line][class$=long] {
        top: 2.375em;
        right: .5em;
        width: 2.9375em;
        transform: rotate(-45deg)
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-tip {
        animation: swal2-animate-success-line-tip .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-line-long {
        animation: swal2-animate-success-line-long .75s
    }

    div:where(.swal2-icon).swal2-success.swal2-icon-show .swal2-success-circular-line-right {
        animation: swal2-rotate-success-circular-line 4.25s ease-in
    }

    [class^=swal2] {
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0)
    }

    .swal2-show {
        animation: swal2-show .3s
    }

    .swal2-hide {
        animation: swal2-hide .15s forwards
    }

    .swal2-noanimation {
        transition: none
    }

    .swal2-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll
    }

    .swal2-rtl .swal2-close {
        margin-right: initial;
        margin-left: 0
    }

    .swal2-rtl .swal2-timer-progress-bar {
        right: 0;
        left: auto
    }

    @keyframes swal2-toast-show {
        0% {
            transform: translateY(-0.625em) rotateZ(2deg)
        }

        33% {
            transform: translateY(0) rotateZ(-2deg)
        }

        66% {
            transform: translateY(0.3125em) rotateZ(2deg)
        }

        100% {
            transform: translateY(0) rotateZ(0deg)
        }
    }

    @keyframes swal2-toast-hide {
        100% {
            transform: rotateZ(1deg);
            opacity: 0
        }
    }

    @keyframes swal2-toast-animate-success-line-tip {
        0% {
            top: .5625em;
            left: .0625em;
            width: 0
        }

        54% {
            top: .125em;
            left: .125em;
            width: 0
        }

        70% {
            top: .625em;
            left: -0.25em;
            width: 1.625em
        }

        84% {
            top: 1.0625em;
            left: .75em;
            width: .5em
        }

        100% {
            top: 1.125em;
            left: .1875em;
            width: .75em
        }
    }

    @keyframes swal2-toast-animate-success-line-long {
        0% {
            top: 1.625em;
            right: 1.375em;
            width: 0
        }

        65% {
            top: 1.25em;
            right: .9375em;
            width: 0
        }

        84% {
            top: .9375em;
            right: 0;
            width: 1.125em
        }

        100% {
            top: .9375em;
            right: .1875em;
            width: 1.375em
        }
    }

    @keyframes swal2-show {
        0% {
            transform: scale(0.7)
        }

        45% {
            transform: scale(1.05)
        }

        80% {
            transform: scale(0.95)
        }

        100% {
            transform: scale(1)
        }
    }

    @keyframes swal2-hide {
        0% {
            transform: scale(1);
            opacity: 1
        }

        100% {
            transform: scale(0.5);
            opacity: 0
        }
    }

    @keyframes swal2-animate-success-line-tip {
        0% {
            top: 1.1875em;
            left: .0625em;
            width: 0
        }

        54% {
            top: 1.0625em;
            left: .125em;
            width: 0
        }

        70% {
            top: 2.1875em;
            left: -0.375em;
            width: 3.125em
        }

        84% {
            top: 3em;
            left: 1.3125em;
            width: 1.0625em
        }

        100% {
            top: 2.8125em;
            left: .8125em;
            width: 1.5625em
        }
    }

    @keyframes swal2-animate-success-line-long {
        0% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        65% {
            top: 3.375em;
            right: 2.875em;
            width: 0
        }

        84% {
            top: 2.1875em;
            right: 0;
            width: 3.4375em
        }

        100% {
            top: 2.375em;
            right: .5em;
            width: 2.9375em
        }
    }

    @keyframes swal2-rotate-success-circular-line {
        0% {
            transform: rotate(-45deg)
        }

        5% {
            transform: rotate(-45deg)
        }

        12% {
            transform: rotate(-405deg)
        }

        100% {
            transform: rotate(-405deg)
        }
    }

    @keyframes swal2-animate-error-x-mark {
        0% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        50% {
            margin-top: 1.625em;
            transform: scale(0.4);
            opacity: 0
        }

        80% {
            margin-top: -0.375em;
            transform: scale(1.15)
        }

        100% {
            margin-top: 0;
            transform: scale(1);
            opacity: 1
        }
    }

    @keyframes swal2-animate-error-icon {
        0% {
            transform: rotateX(100deg);
            opacity: 0
        }

        100% {
            transform: rotateX(0deg);
            opacity: 1
        }
    }

    @keyframes swal2-rotate-loading {
        0% {
            transform: rotate(0deg)
        }

        100% {
            transform: rotate(360deg)
        }
    }

    @keyframes swal2-animate-question-mark {
        0% {
            transform: rotateY(-360deg)
        }

        100% {
            transform: rotateY(0)
        }
    }

    @keyframes swal2-animate-i-mark {
        0% {
            transform: rotateZ(45deg);
            opacity: 0
        }

        25% {
            transform: rotateZ(-25deg);
            opacity: .4
        }

        50% {
            transform: rotateZ(15deg);
            opacity: .8
        }

        75% {
            transform: rotateZ(-5deg);
            opacity: 1
        }

        100% {
            transform: rotateX(0);
            opacity: 1
        }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow: hidden
    }

    body.swal2-height-auto {
        height: auto !important
    }

    body.swal2-no-backdrop .swal2-container {
        background-color: rgba(0, 0, 0, 0) !important;
        pointer-events: none
    }

    body.swal2-no-backdrop .swal2-container .swal2-popup {
        pointer-events: all
    }

    body.swal2-no-backdrop .swal2-container .swal2-modal {
        box-shadow: 0 0 10px rgba(0, 0, 0, .4)
    }

    @media print {
        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
            overflow-y: scroll !important
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true] {
            display: none
        }

        body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
            position: static !important
        }
    }

    body.swal2-toast-shown .swal2-container {
        box-sizing: border-box;
        width: 360px;
        max-width: 100%;
        background-color: rgba(0, 0, 0, 0);
        pointer-events: none
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
        inset: 0 auto auto 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
        inset: 0 0 auto auto
    }

    body.swal2-toast-shown .swal2-container.swal2-top-start,
    body.swal2-toast-shown .swal2-container.swal2-top-left {
        inset: 0 auto auto 0
    }

    body.swal2-toast-shown .swal2-container.swal2-center-start,
    body.swal2-toast-shown .swal2-container.swal2-center-left {
        inset: 50% auto auto 0;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
        inset: 50% auto auto 50%;
        transform: translate(-50%, -50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
        inset: 50% 0 auto auto;
        transform: translateY(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-start,
    body.swal2-toast-shown .swal2-container.swal2-bottom-left {
        inset: auto auto 0 0
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
        inset: auto auto 0 50%;
        transform: translateX(-50%)
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
        inset: auto 0 0 auto
    }
</style>

<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="js/common.js?d=20230807_911"></script>
<script src="js/custom.js?d=20230807_911"></script>

<link rel="stylesheet" href="css/import.css?d=20240905_001">

</head>

<body>
    <article class="headerArticle">
        <header>
            <div>
                <h1>
                    <a href="/Default.php"></a>
                </h1>

                <nav>
                    <ul>


                        <li><a href="/Trading.php">거래소</a></li>
                        <li><a href="/Balance.php">입출금</a></li>
                        <li><a href="/Board/List.php?id=notice">공지사항</a></li>

                    </ul>
                </nav>

                <div>
                    <ul>
                        <li><a href="/Login.php">로그인</a></li>
                        <li><a href="/SignUp.php">회원가입</a>
                        </li>
                    </ul>

                    <div class="pcSwitch">
                        <input type="checkbox" id="modeSwitch">
                        <label for="modeSwitch"><span></span></label>
                    </div>

                    <input type="button" value="gnbToggle" data-panel="gnbPanel" id="gnbBtn">
                </div>
            </div>



            <nav id="gnbPanel">
                <input type="button" value="close" class="closeBtn">
                <ul>
                    <li><a href="/Login.php">로그인</a></li>
                    <li><a href="/SignUp.php">회원가입</a>
                    </li>
                </ul>

                <ul>

                </ul>

                <ul>

                    <li><a href="/Trading.php">거래소</a></li>
                    <li><a href="/Balance.php">입출금</a></li>
                    <li><a href="/Board/List.php?id=notice">공지사항</a></li>


                </ul>



                <ol id="slideToggle">
                    <li>
                        <div>
                            <span>Theme</span>
                            <input type="checkbox" id="modeSwitch2">
                            <label for="modeSwitch2"><span></span></label>
                        </div>
                    </li>
                </ol>
            </nav>
        </header>
    </article>

    <form method="post" action="./View.php?id=notice&amp;rno=2&amp;page=1" id="form1">
        <div class="aspNetHidden">
            <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE"
                value="/wEPDwUKMTIzMDkxMDE5MQ8WAh4TVmFsaWRhdGVSZXF1ZXN0TW9kZQIBFgJmD2QWDAIBDxYCHgRUZXh0BeIBDQogICAgICAgIDxsaT48YSBocmVmPSIvVHJhZGluZy5hc3B4Ij7qsbDrnpjshow8L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvQmFsYW5jZS5hc3B4Ij7snoXstpzquIg8L2E+PC9saT4NCiAgICAgICAgICAgICAgICAgICAgICAgIDxsaT48YSBocmVmPSIvQm9hcmQvTGlzdC5hc3B4P2lkPW5vdGljZSI+6rO17KeA7IKs7ZWtPC9hPjwvbGk+DQogICAgICAgIGQCAg8WAh8BBVc8bGk+PGEgaHJlZj0iL0xvZ2luLmFzcHgiPuuhnOq3uOyduDwvYT48L2xpPjxsaT48YSBocmVmPSIvU2lnblVwLmFzcHgiPu2ajOybkOqwgOyehTwvYT5kAgMPFgIfAQVXPGxpPjxhIGhyZWY9Ii9Mb2dpbi5hc3B4Ij7roZzqt7jsnbg8L2E+PC9saT48bGk+PGEgaHJlZj0iL1NpZ25VcC5hc3B4Ij7tmozsm5DqsIDsnoU8L2E+ZAIEDxYCHwFlZAIFDxYCHwEF4gENCiAgICAgICAgPGxpPjxhIGhyZWY9Ii9UcmFkaW5nLmFzcHgiPuqxsOuemOyGjDwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9CYWxhbmNlLmFzcHgiPuyehey2nOq4iDwvYT48L2xpPg0KICAgICAgICAgICAgICAgICAgICAgICAgPGxpPjxhIGhyZWY9Ii9Cb2FyZC9MaXN0LmFzcHg/aWQ9bm90aWNlIj7qs7Xsp4Dsgqztla08L2E+PC9saT4NCiAgICAgICAgZAIGD2QWAgIBD2QWEGYPFgIeB1Zpc2libGVoZAIBDxYCHwJoZAICDxYCHwJoZAIFDxYCHwEFGeyVhOydtOyKpO2BrOumvCDrp5vsnofsjahkAgYPFgIfAQUG67O47IKsZAIHDxYCHwEFGTIwMjQtMDktMTEg7Jik7ZuEIDY6NTA6NTdkAg4PFgIfAmgWAgIBDxYCHwFlZAIPDxYCHwJoFgICAw8PZBYCHgdvbmNsaWNrBRFjbGlja0NoZWNrKHRoaXMpO2Rkrni5e4ClGn4ODAkZuaJkLeGCumh2IMLNAzvAwydoWts=">
        </div>

        <div class="aspNetHidden">

            <input type="hidden" name="__VIEWSTATEGENERATOR" id="__VIEWSTATEGENERATOR" value="42551BB6">
            <input type="hidden" name="__EVENTVALIDATION" id="__EVENTVALIDATION"
                value="/wEdAAehaQ5MiqCdWKOTS5oUxx3r+1n/n5L/h+8R+H5PeybT58bjs17kAIMVFqqFAL64dIPXY5QYJG17Kct7ZnHjeF5dMC6ovDULoIfUZH0nmnfonpum2lHSesEizJOm3E6cTrKiDC9TAtrD8weNPUfE0XMO3dyCEE1xnCcmMjifeOmhBzei2RXxiD9HV4HIpjOSZHg=">
        </div>

        <div class="subRouteContent">
            <div class="wrapper">
                <div class="sub-contents-layout">
                    <div class="frameWrapper">
                        <div class="_layer_background"></div>
                        <div class="invest_wrap">
                            <!-- 메인컨텐츠 시작 -->

                            <section id="title" class="noticeContainer">
                                <div>
                                    <ul>

                                        <li id="cpContent_menuNotice" class="active"><a style="display: block;"
                                                href="Testlist.php?id=notice">공지사항</a></li>
                                        <li id="cpContent_menuFaq"><a style="display: block;"
                                                href="List.php?id=faq">이용안내</a></li>

                                    </ul>

                                    <div class="qnaViewBox">
                                        <p>
                                            아이스크림 맛잇써
                                        </p>
                                        <span>
                                            본사
                                        </span>
                                        <span>
                                            2024-09-11 오후 6:50:57
                                        </span>
                                        <div id="text_conts">
                                            <p>아이스크림 맛잇써</p>
                                            <p><br></p>
                                            <p>아이스크림 맛잇써</p>
                                            <p>아이스크림 맛잇써아이스크림 맛잇써</p>
                                            <p><br></p>
                                            <p><br></p>
                                            <p>아이스크림 맛잇써</p>
                                            <p><br></p>
                                        </div>
                                    </div>

                                    <!-- 본문 -->

                                    <!-- 댓글 목록 -->

                                    <!-- 댓글 작성창 -->

                                    <!-- <a class="btn_1" href="/Board/List.php?id=notice&amp;rno=2&amp;page=1">목록asd</a> -->
                                    <a class="btn_1" href="testlist.html">목록asd</a>
                                    <!-- 댓글 목록 버튼 -->
                                </div>
                            </section>


                            <!-- 메인컨텐츠 끝 -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <script>
        var searchParams = new URLSearchParams(window.location.search);
        var id = searchParams.get("id");

        if (id == "notice" || id == "event" || id == "news" || id == "faq")
            $("#title").attr("class", "noticeContainer");
        else
            $("#title").attr("class", "qnaContainer");

        if (id == "qna") {
            $("#menuQna").addClass('active');
            $("#cpContent_menuQna").addClass('active');
        }
        if (id == "message") {
            $("#menuMessage").addClass('active');
            $("#cpContent_menuMessage").addClass('active');
        }
        if (id == "modify") {
            $("#menuModify").addClass('active');
            $("#cpContent_menuModify").addClass('active');
        }

        if (id == "notice") {
            $("#menuNotice").addClass('active');
            $("#cpContent_menuNotice").addClass('active');
        }
        if (id == "faq") {
            $("#menuFaq").addClass('active');
            $("#cpContent_menuFaq").addClass('active');
        }

    </script>


    <div id="positionCheck"></div>
    <footer>
        <div>
            <div>
                <h4></h4>
                <ul>
                    <li>모든 컨텐츠 저작권은 비트프로에 있으며, 무단도용시 법적 불이익을 받습니다.</li>
                    <li>Copyright © 비트프로. All rights reserved</li>
                    <li>
                        <ol>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ol>
                    </li>
                </ul>
            </div>

            <ul>
                <li>
                    <b>파트너</b>
                    <ol>
                        <li><a href="https://www.binance.com">바이낸스</a></li>
                        <li><a href="https://www.upbit.com">업비트</a></li>
                    </ol>
                </li>
                <li>
                    <b>회사 소개</b>
                    <ol>
                        <li><a href="#">회사소개</a></li>
                        <li><a href="/Board/List.php?id=notice">공지사항</a></li>
                        <li><a href="#">이용약관</a></li>
                        <li><a href="#">Open API 이용약관</a></li>
                    </ol>
                </li>
            </ul>
        </div>
    </footer>
    <script>

        var rCnt = 0;
        if (rCnt > 0 && window.location.href.indexOf("qna") < 0) {
            Swal.fire('확인하지 않은 관리자 댓글이 있습니다.').then(function () {
                window.location = '/Board/List.php?id=qna';
            })
        }
        var rCnt2 = 0;
        if (rCnt2 > 0 && window.location.href.indexOf("message") < 0) {
            Swal.fire('확인하지 않은 알림이 있습니다.').then(function () {
                window.location = '/Board/List.php?id=message';
            })
        }
    </script>



    <div id="extension-mmplj"></div>
</body>

</html>