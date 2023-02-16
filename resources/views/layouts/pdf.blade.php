<style>
    /*!

    =========================================================
    * Soft UI Dashboard Tailwind - v1.0.3
    =========================================================
    
    * Product Page: https://www.creative-tim.com/product/soft-ui-dashboard-tailwind
    * Copyright 2022 Creative Tim (https://www.creative-tim.com)
    * Licensed under MIT (site.license)
    
    * Coded by www.creative-tim.com
    
    =========================================================
    
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    
    */

    /*! tailwindcss v3.0.20 | MIT License | https://tailwindcss.com
    
    */

    /*
    1. Prevent padding and border from affecting element width. (https://github.com/mozdevs/cssremedy/issues/4)
    2. Allow adding a border to an element by just adding a border-width. (https://github.com/tailwindcss/tailwindcss/pull/116)
    */

    *,
    ::before,
    ::after {
        box-sizing: border-box;
        /* 1 */
        border-width: 0;
        /* 2 */
        border-style: solid;
        /* 2 */
        border-color: #e9ecef;
        /* 2 */
    }

    ::before,
    ::after {
        --tw-content: '';
    }

    /*
    1. Use a consistent sensible line-height in all browsers.
    2. Prevent adjustments of font size after orientation changes in iOS.
    3. Use a more readable tab size.
    4. Use the user's configured `sans` font-family by default.
    */

    html {
        line-height: 1.5;
        /* 1 */
        -webkit-text-size-adjust: 100%;
        /* 2 */
        -moz-tab-size: 4;
        /* 3 */
        -o-tab-size: 4;
        tab-size: 4;
        /* 3 */
        font-family: Open Sans;
        /* 4 */
    }

    /*
    1. Remove the margin in all browsers.
    2. Inherit line-height from `html` so users can set them as a class directly on the `html` element.
    */

    body {
        margin: 0;
        /* 1 */
        line-height: inherit;
        /* 2 */
    }

    /*
    1. Add the correct height in Firefox.
    2. Correct the inheritance of border color in Firefox. (https://bugzilla.mozilla.org/show_bug.cgi?id=190655)
    3. Ensure horizontal rules are visible by default.
    */

    hr {
        height: 0;
        /* 1 */
        color: inherit;
        /* 2 */
        border-top-width: 1px;
        /* 3 */
    }

    /*
    Add the correct text decoration in Chrome, Edge, and Safari.
    */

    abbr:where([title]) {
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
    }

    /*
    Remove the default font size and weight for headings.
    */

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-size: inherit;
        font-weight: inherit;
    }

    /*
    Reset links to optimize for opt-in styling instead of opt-out.
    */

    a {
        color: inherit;
        text-decoration: inherit;
    }

    /*
    Add the correct font weight in Edge and Safari.
    */

    b,
    strong {
        font-weight: bolder;
    }

    /*
    1. Use the user's configured `mono` font family by default.
    2. Correct the odd `em` font sizing in all browsers.
    */

    code,
    kbd,
    samp,
    pre {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        /* 1 */
        font-size: 1em;
        /* 2 */
    }

    /*
    Add the correct font size in all browsers.
    */

    small {
        font-size: 80%;
    }

    /*
    Prevent `sub` and `sup` elements from affecting the line height in all browsers.
    */

    sub,
    sup {
        font-size: 75%;
        line-height: 0;
        position: relative;
        vertical-align: baseline;
    }

    sub {
        bottom: -0.25em;
    }

    sup {
        top: -0.5em;
    }

    /*
    1. Remove text indentation from table contents in Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=999088, https://bugs.webkit.org/show_bug.cgi?id=201297)
    2. Correct table border color inheritance in all Chrome and Safari. (https://bugs.chromium.org/p/chromium/issues/detail?id=935729, https://bugs.webkit.org/show_bug.cgi?id=195016)
    3. Remove gaps between table borders by default.
    */

    table {
        text-indent: 0;
        /* 1 */
        border-color: inherit;
        /* 2 */
        border-collapse: collapse;
        /* 3 */
    }

    /*
    1. Change the font styles in all browsers.
    2. Remove the margin in Firefox and Safari.
    3. Remove default padding in all browsers.
    */

    button,
    input,
    optgroup,
    select,
    textarea {
        font-family: inherit;
        /* 1 */
        font-size: 100%;
        /* 1 */
        line-height: inherit;
        /* 1 */
        color: inherit;
        /* 1 */
        margin: 0;
        /* 2 */
        padding: 0;
        /* 3 */
    }

    /*
    Remove the inheritance of text transform in Edge and Firefox.
    */

    button,
    select {
        text-transform: none;
    }

    /*
    1. Correct the inability to style clickable types in iOS and Safari.
    2. Remove default button styles.
    */

    button,
    [type='button'],
    [type='reset'],
    [type='submit'] {
        -webkit-appearance: button;
        /* 1 */
        background-color: transparent;
        /* 2 */
        background-image: none;
        /* 2 */
    }

    /*
    Use the modern Firefox focus style for all focusable elements.
    */

    :-moz-focusring {
        outline: auto;
    }

    /*
    Remove the additional `:invalid` styles in Firefox. (https://github.com/mozilla/gecko-dev/blob/2f9eacd9d3d995c937b4251a5557d95d494c9be1/layout/style/res/forms.css#L728-L737)
    */

    :-moz-ui-invalid {
        box-shadow: none;
    }

    /*
    Add the correct vertical alignment in Chrome and Firefox.
    */

    progress {
        vertical-align: baseline;
    }

    /*
    Correct the cursor style of increment and decrement buttons in Safari.
    */

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
        height: auto;
    }

    /*
    1. Correct the odd appearance in Chrome and Safari.
    2. Correct the outline style in Safari.
    */

    [type='search'] {
        -webkit-appearance: textfield;
        /* 1 */
        outline-offset: -2px;
        /* 2 */
    }

    /*
    Remove the inner padding in Chrome and Safari on macOS.
    */

    ::-webkit-search-decoration {
        -webkit-appearance: none;
    }

    /*
    1. Correct the inability to style clickable types in iOS and Safari.
    2. Change font properties to `inherit` in Safari.
    */

    ::-webkit-file-upload-button {
        -webkit-appearance: button;
        /* 1 */
        font: inherit;
        /* 2 */
    }

    /*
    Add the correct display in Chrome and Safari.
    */

    summary {
        display: list-item;
    }

    /*
    Removes the default spacing and border for appropriate elements.
    */

    blockquote,
    dl,
    dd,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    figure,
    p,
    pre {
        margin: 0;
    }

    fieldset {
        margin: 0;
        padding: 0;
    }

    legend {
        padding: 0;
    }

    ol,
    ul,
    menu {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    /*
    Prevent resizing textareas horizontally by default.
    */

    textarea {
        resize: vertical;
    }

    /*
    1. Reset the default placeholder opacity in Firefox. (https://github.com/tailwindlabs/tailwindcss/issues/3300)
    2. Set the default placeholder color to the user's configured gray 400 color.
    */

    input::-moz-placeholder,
    textarea::-moz-placeholder {
        opacity: 1;
        /* 1 */
        color: #ced4da;
        /* 2 */
    }

    input:-ms-input-placeholder,
    textarea:-ms-input-placeholder {
        opacity: 1;
        /* 1 */
        color: #ced4da;
        /* 2 */
    }

    input::placeholder,
    textarea::placeholder {
        opacity: 1;
        /* 1 */
        color: #ced4da;
        /* 2 */
    }

    /*
    Set the default cursor for buttons.
    */

    button,
    [role="button"] {
        cursor: pointer;
    }

    /*
    Make sure disabled buttons don't get the pointer cursor.
    */

    :disabled {
        cursor: default;
    }

    /*
    1. Make replaced elements `display: block` by default. (https://github.com/mozdevs/cssremedy/issues/14)
    2. Add `vertical-align: middle` to align replaced elements more sensibly by default. (https://github.com/jensimmons/cssremedy/issues/14#issuecomment-634934210)
       This can trigger a poorly considered lint error in some tools but is included by design.
    */

    img,
    svg,
    video,
    canvas,
    audio,
    iframe,
    embed,
    object {
        display: block;
        /* 1 */
        vertical-align: middle;
        /* 2 */
    }

    /*
    Constrain images and videos to the parent width and preserve their intrinsic aspect ratio. (https://github.com/mozdevs/cssremedy/issues/14)
    */

    img,
    video {
        max-width: 100%;
        height: auto;
    }

    /*
    Ensure the default browser behavior of the `hidden` attribute.
    */

    [hidden] {
        display: none;
    }

    *,
    ::before,
    ::after {
        --tw-translate-x: 0;
        --tw-translate-y: 0;
        --tw-rotate: 0;
        --tw-skew-x: 0;
        --tw-skew-y: 0;
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        --tw-pan-x: ;
        --tw-pan-y: ;
        --tw-pinch-zoom: ;
        --tw-scroll-snap-strictness: proximity;
        --tw-ordinal: ;
        --tw-slashed-zero: ;
        --tw-numeric-figure: ;
        --tw-numeric-spacing: ;
        --tw-numeric-fraction: ;
        --tw-ring-inset: ;
        --tw-ring-offset-width: 0px;
        --tw-ring-offset-color: #fff;
        --tw-ring-color: rgb(59 130 246 / 0.5);
        --tw-ring-offset-shadow: 0 0 #0000;
        --tw-ring-shadow: 0 0 #0000;
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        --tw-blur: ;
        --tw-brightness: ;
        --tw-contrast: ;
        --tw-grayscale: ;
        --tw-hue-rotate: ;
        --tw-invert: ;
        --tw-saturate: ;
        --tw-sepia: ;
        --tw-drop-shadow: ;
        --tw-backdrop-blur: ;
        --tw-backdrop-brightness: ;
        --tw-backdrop-contrast: ;
        --tw-backdrop-grayscale: ;
        --tw-backdrop-hue-rotate: ;
        --tw-backdrop-invert: ;
        --tw-backdrop-opacity: ;
        --tw-backdrop-saturate: ;
        --tw-backdrop-sepia: ;
    }

    .container {
        width: 100%;
        margin-right: auto;
        margin-left: auto;
        padding-right: 1.5rem;
        padding-left: 1.5rem;
    }

    @media (min-width: 576px) {
        .container {
            max-width: 576px;
        }
    }

    @media (min-width: 768px) {
        .container {
            max-width: 768px;
        }
    }

    @media (min-width: 992px) {
        .container {
            max-width: 992px;
        }
    }

    @media (min-width: 1200px) {
        .container {
            max-width: 1200px;
        }
    }

    @media (min-width: 1320px) {
        .container {
            max-width: 1320px;
        }
    }

    a {
        letter-spacing: -0.025rem;
    }

    hr {
        margin: 1rem 0;
        border: 0;
        opacity: .25;
    }

    img {
        max-width: none;
    }

    label {
        display: inline-block;
    }

    p {
        line-height: 1.625;
        font-weight: 400;
        margin-bottom: 1rem;
    }

    small {
        font-size: .875em;
    }

    svg {
        display: inline;
    }

    table {
        border-collapse: inherit;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin-bottom: .5rem;
        color: #344767;
    }

    h1,
    h2,
    h3,
    h4 {
        letter-spacing: -0.05rem;
    }

    h1,
    h2,
    h3 {
        font-weight: 700;
    }

    h4,
    h5,
    h6 {
        font-weight: 600;
    }

    h1 {
        font-size: 3rem;
        line-height: 1.25;
    }

    h2 {
        font-size: 2.25rem;
        line-height: 1.3;
    }

    h3 {
        font-size: 1.875rem;
        line-height: 1.375;
    }

    h4 {
        font-size: 1.5rem;
        line-height: 1.375;
    }

    h5 {
        font-size: 1.25rem;
        line-height: 1.375;
    }

    h6 {
        font-size: 1rem;
        line-height: 1.625;
    }

    .pointer-events-none {
        pointer-events: none;
    }

    .visible {
        visibility: visible;
    }

    .invisible {
        visibility: hidden;
    }

    .fixed {
        position: fixed;
    }

    .absolute {
        position: absolute;
    }

    .relative {
        position: relative;
    }

    .sticky {
        position: -webkit-sticky;
        position: sticky;
    }

    .inset-y-0 {
        top: 0px;
        bottom: 0px;
    }

    .inset-x-0 {
        left: 0px;
        right: 0px;
    }

    .top-0 {
        top: 0px;
    }

    .right-0 {
        right: 0px;
    }

    .top-3\.5 {
        top: 0.875rem;
    }

    .top-3 {
        top: 0.75rem;
    }

    .left-0 {
        left: 0px;
    }

    .left-4 {
        left: 1rem;
    }

    .-top-1\.5 {
        top: -0.375rem;
    }

    .-top-1 {
        top: -0.25rem;
    }

    .bottom-7\.5 {
        bottom: 1.875rem;
    }

    .right-7\.5 {
        right: 1.875rem;
    }

    .bottom-7 {
        bottom: 1.75rem;
    }

    .right-7 {
        right: 1.75rem;
    }

    .-right-90 {
        right: -22.5rem;
    }

    .left-auto {
        left: auto;
    }

    .bottom-0 {
        bottom: 0px;
    }

    .top-auto {
        top: auto;
    }

    .top-31\/100 {
        top: 31%;
    }

    .right-4 {
        right: 1rem;
    }

    .left-7\.5 {
        left: 1.875rem;
    }

    .right-auto {
        right: auto;
    }

    .left-7 {
        left: 1.75rem;
    }

    .-left-90 {
        left: -22.5rem;
    }

    .-right-40 {
        right: -10rem;
    }

    .top-\[1\%\] {
        top: 1%;
    }

    .z-990 {
        z-index: 990;
    }

    .z-20 {
        z-index: 20;
    }

    .z-10 {
        z-index: 10;
    }

    .z-50 {
        z-index: 50;
    }

    .z-100 {
        z-index: 100;
    }

    .z-sticky {
        z-index: 1020;
    }

    .z-30 {
        z-index: 30;
    }

    .z-0 {
        z-index: 0;
    }

    .z-110 {
        z-index: 110;
    }

    .float-right {
        float: right;
    }

    .float-left {
        float: left;
    }

    .clear-both {
        clear: both;
    }

    .m-0 {
        margin: 0px;
    }

    .m-4 {
        margin: 1rem;
    }

    .my-4 {
        margin-top: 1rem;
        margin-bottom: 1rem;
    }

    .my-0 {
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .mx-4 {
        margin-left: 1rem;
        margin-right: 1rem;
    }

    .mx-6 {
        margin-left: 1.5rem;
        margin-right: 1.5rem;
    }

    .mx-auto {
        margin-left: auto;
        margin-right: auto;
    }

    .my-auto {
        margin-top: auto;
        margin-bottom: auto;
    }

    .-mx-3 {
        margin-left: -0.75rem;
        margin-right: -0.75rem;
    }

    .my-6 {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
    }

    .mx-0 {
        margin-left: 0px;
        margin-right: 0px;
    }

    .my-1 {
        margin-top: 0.25rem;
        margin-bottom: 0.25rem;
    }

    .my-2 {
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
    }

    .my-56 {
        margin-top: 14rem;
        margin-bottom: 14rem;
    }

    .mx-2 {
        margin-left: 0.5rem;
        margin-right: 0.5rem;
    }

    .ml-4 {
        margin-left: 1rem;
    }

    .ml-1 {
        margin-left: 0.25rem;
    }

    .mt-0 {
        margin-top: 0px;
    }

    .mb-0 {
        margin-bottom: 0px;
    }

    .mt-0\.5 {
        margin-top: 0.125rem;
    }

    .mr-2 {
        margin-right: 0.5rem;
    }

    .mt-4 {
        margin-top: 1rem;
    }

    .ml-2 {
        margin-left: 0.5rem;
    }

    .mb-7\.5 {
        margin-bottom: 1.875rem;
    }

    .mb-7 {
        margin-bottom: 1.75rem;
    }

    .mb-4 {
        margin-bottom: 1rem;
    }

    .mr-12 {
        margin-right: 3rem;
    }

    .mt-2 {
        margin-top: 0.5rem;
    }

    .-ml-px {
        margin-left: -1px;
    }

    .mr-4 {
        margin-right: 1rem;
    }

    .mb-0\.75 {
        margin-bottom: 0.1875rem;
    }

    .mb-2 {
        margin-bottom: 0.5rem;
    }

    .mb-1 {
        margin-bottom: 0.25rem;
    }

    .mr-1 {
        margin-right: 0.25rem;
    }

    .mb-6 {
        margin-bottom: 1.5rem;
    }

    .mt-6 {
        margin-top: 1.5rem;
    }

    .mb-12 {
        margin-bottom: 3rem;
    }

    .mt-auto {
        margin-top: auto;
    }

    .mt-12 {
        margin-top: 3rem;
    }

    .ml-auto {
        margin-left: auto;
    }

    .mt-1 {
        margin-top: 0.25rem;
    }

    .-mt-0\.38 {
        margin-top: -0.095rem;
    }

    .-mt-0 {
        margin-top: -0px;
    }

    .-ml-34 {
        margin-left: -8.5rem;
    }

    .-ml-4 {
        margin-left: -1rem;
    }

    .ml-11\.252 {
        margin-left: 2.813rem;
    }

    .ml-11 {
        margin-left: 2.75rem;
    }

    .mr-1\.25 {
        margin-right: 0.3125rem;
    }

    .mb-0\.5 {
        margin-bottom: 0.125rem;
    }

    .mr-6 {
        margin-right: 1.5rem;
    }

    .ml-6 {
        margin-left: 1.5rem;
    }

    .-mt-16 {
        margin-top: -4rem;
    }

    .mt-0\.54 {
        margin-top: 0.135rem;
    }

    .-mr-px {
        margin-right: -1px;
    }

    .ml-0 {
        margin-left: 0px;
    }

    .mr-auto {
        margin-right: auto;
    }

    .-mr-34 {
        margin-right: -8.5rem;
    }

    .-mr-4 {
        margin-right: -1rem;
    }

    .mr-11\.252 {
        margin-right: 2.813rem;
    }

    .mr-11 {
        margin-right: 2.75rem;
    }

    .mt-1\.75 {
        margin-top: 0.4375rem;
    }

    .mt-32 {
        margin-top: 8rem;
    }

    .-ml-12 {
        margin-left: -3rem;
    }

    .-mr-32 {
        margin-right: -8rem;
    }

    .-ml-16 {
        margin-left: -4rem;
    }

    .mb-32 {
        margin-bottom: 8rem;
    }

    .-mt-48 {
        margin-top: -12rem;
    }

    .-ml-6\.92-em {
        margin-left: -1.73em;
    }

    .-ml-6 {
        margin-left: -1.5rem;
    }

    .-mt-6 {
        margin-top: -1.5rem;
    }

    .-mt-2 {
        margin-top: -0.5rem;
    }

    .mt-0\.75 {
        margin-top: 0.1875rem;
    }

    .block {
        display: block;
    }

    .inline-block {
        display: inline-block;
    }

    .inline {
        display: inline;
    }

    .flex {
        display: flex;
    }

    .inline-flex {
        display: inline-flex;
    }

    .table {
        display: table;
    }

    .grid {
        display: grid;
    }

    .hidden {
        display: none;
    }

    .h-19\.5 {
        height: 4.875rem;
    }

    .h-full {
        height: 100%;
    }

    .h-px {
        height: 1px;
    }

    .h-sidenav {
        height: calc(100vh - 305px);
    }

    .h-8 {
        height: 2rem;
    }

    .h-0\.5 {
        height: 0.125rem;
    }

    .h-0 {
        height: 0px;
    }

    .h-9 {
        height: 2.25rem;
    }

    .h-12 {
        height: 3rem;
    }

    .h-5 {
        height: 1.25rem;
    }

    .h-0\.75 {
        height: 0.1875rem;
    }

    .h-1\.5 {
        height: 0.375rem;
    }

    .h-1 {
        height: 0.25rem;
    }

    .h-6 {
        height: 1.5rem;
    }

    .h-2 {
        height: 0.5rem;
    }

    .h-6\.5 {
        height: 1.625rem;
    }

    .h-5\.75 {
        height: 1.4375rem;
    }

    .h-5-em {
        height: 1.25em;
    }

    .h-\[80vh\] {
        height: 80vh;
    }

    .h-16 {
        height: 4rem;
    }

    .h-6\.35 {
        height: 1.5875rem;
    }

    .h-18\.5 {
        height: 4.625rem;
    }

    .h-6-em {
        height: 1.5em;
    }

    .h-4\.92-em {
        height: 1.23em;
    }

    .h-4 {
        height: 1rem;
    }

    .max-h-8 {
        max-height: 2rem;
    }

    .max-h-screen {
        max-height: 100vh;
    }

    .min-h-6 {
        min-height: 1.5rem;
    }

    .min-h-75 {
        min-height: 18.75rem;
    }

    .min-h-75-screen {
        min-height: 75vh;
    }

    .min-h-screen {
        min-height: 100vh;
    }

    .min-h-50-screen {
        min-height: 50vh;
    }

    .min-h-85-screen {
        min-height: 85vh;
    }

    .w-full {
        width: 100%;
    }

    .w-auto {
        width: auto;
    }

    .w-8 {
        width: 2rem;
    }

    .w-1\/100 {
        width: 1%;
    }

    .w-4\.5 {
        width: 1.125rem;
    }

    .w-4 {
        width: 1rem;
    }

    .w-9 {
        width: 2.25rem;
    }

    .w-2\/3 {
        width: 66.666667%;
    }

    .w-12 {
        width: 3rem;
    }

    .w-1\/2 {
        width: 50%;
    }

    .w-1\/4 {
        width: 25%;
    }

    .w-5 {
        width: 1.25rem;
    }

    .w-3\/4 {
        width: 75%;
    }

    .w-3\/5 {
        width: 60%;
    }

    .w-9\/10 {
        width: 90%;
    }

    .w-3\/10 {
        width: 30%;
    }

    .w-7\/12 {
        width: 58.333333%;
    }

    .w-5\/12 {
        width: 41.666667%;
    }

    .w-6 {
        width: 1.5rem;
    }

    .w-2 {
        width: 0.5rem;
    }

    .w-30 {
        width: 7.5rem;
    }

    .w-1\/10 {
        width: 10%;
    }

    .w-2\/5 {
        width: 40%;
    }

    .w-6\.5 {
        width: 1.625rem;
    }

    .w-90 {
        width: 22.5rem;
    }

    .w-5\.75 {
        width: 1.4375rem;
    }

    .w-10 {
        width: 2.5rem;
    }

    .w-1\/5 {
        width: 20%;
    }

    .w-16 {
        width: 4rem;
    }

    .w-6\.35 {
        width: 1.5875rem;
    }

    .w-18\.5 {
        width: 4.625rem;
    }

    .w-4\/5 {
        width: 80%;
    }

    .w-6-em {
        width: 1.5em;
    }

    .w-5\.5 {
        width: 1.375rem;
    }

    .w-8\/12 {
        width: 66.666667%;
    }

    .w-3\/12 {
        width: 25%;
    }

    .w-4\.92-em {
        width: 1.23em;
    }

    .w-0 {
        width: 0px;
    }

    .min-w-0 {
        min-width: 0px;
    }

    .min-w-44 {
        min-width: 11rem;
    }

    .max-w-62\.5 {
        max-width: 15.625rem;
    }

    .max-w-full {
        max-width: 100%;
    }

    .max-w-none {
        max-width: none;
    }

    .max-w-screen-2xl {
        max-width: 1320px;
    }

    .flex-auto {
        flex: 1 1 auto;
    }

    .flex-none {
        flex: none;
    }

    .flex-0 {
        flex: 0 0 auto;
    }

    .flex-shrink-0 {
        flex-shrink: 0;
    }

    .shrink-0 {
        flex-shrink: 0;
    }

    .flex-grow {
        flex-grow: 1;
    }

    .grow {
        flex-grow: 1;
    }

    .basis-full {
        flex-basis: 100%;
    }

    .basis-1\/3 {
        flex-basis: 33.333333%;
    }

    .origin-top {
        transform-origin: top;
    }

    .origin-10-10 {
        transform-origin: 10% 10%;
    }

    .origin-10-90 {
        transform-origin: 10% 90%;
    }

    .-translate-x-full {
        --tw-translate-x: -100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-translate-x-1\/2 {
        --tw-translate-x: -50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-x-full {
        --tw-translate-x: 100%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-x-1\/2 {
        --tw-translate-x: 50%;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-x-0 {
        --tw-translate-x: 0px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-translate-x-\[5px\] {
        --tw-translate-x: -5px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .translate-x-\[5px\] {
        --tw-translate-x: 5px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .rotate-45 {
        --tw-rotate: 45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-rotate-45 {
        --tw-rotate: -45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .-skew-x-10 {
        --tw-skew-x: -10deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .skew-x-10 {
        --tw-skew-x: 10deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .transform {
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .cursor-pointer {
        cursor: pointer;
    }

    .select-none {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .resize {
        resize: both;
    }

    .list-none {
        list-style-type: none;
    }

    .appearance-none {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    .flex-row {
        flex-direction: row;
    }

    .flex-col {
        flex-direction: column;
    }

    .flex-wrap {
        flex-wrap: wrap;
    }

    .items-start {
        align-items: flex-start;
    }

    .items-end {
        align-items: flex-end;
    }

    .items-center {
        align-items: center;
    }

    .items-stretch {
        align-items: stretch;
    }

    .justify-end {
        justify-content: flex-end;
    }

    .justify-center {
        justify-content: center;
    }

    .justify-between {
        justify-content: space-between;
    }

    .overflow-auto {
        overflow: auto;
    }

    .overflow-hidden {
        overflow: hidden;
    }

    .overflow-visible {
        overflow: visible;
    }

    .overflow-x-auto {
        overflow-x: auto;
    }

    .overflow-y-auto {
        overflow-y: auto;
    }

    .text-ellipsis {
        text-overflow: ellipsis;
    }

    .whitespace-nowrap {
        white-space: nowrap;
    }

    .break-words {
        overflow-wrap: break-word;
    }

    .rounded-2xl {
        border-radius: 1rem;
    }

    .rounded-lg {
        border-radius: 0.5rem;
    }

    .rounded-xl {
        border-radius: 0.75rem;
    }

    .rounded-sm {
        border-radius: 0.125rem;
    }

    .rounded {
        border-radius: 0.25rem;
    }

    .rounded-full {
        border-radius: 9999px;
    }

    .rounded-circle {
        border-radius: 50%;
    }

    .rounded-none {
        border-radius: 0px;
    }

    .rounded-10 {
        border-radius: 2.5rem;
    }

    .rounded-3\.5xl {
        border-radius: 1.875rem;
    }

    .rounded-3 {
        border-radius: 0.75rem;
    }

    .rounded-blur {
        border-radius: 40px;
    }

    .rounded-xs {
        border-radius: 0.0625rem;
    }

    .rounded-1\.4 {
        border-radius: 0.35rem;
    }

    .rounded-1 {
        border-radius: 0.25rem;
    }

    .rounded-1\.8 {
        border-radius: 0.45rem;
    }

    .rounded-t-2xl {
        border-top-left-radius: 1rem;
        border-top-right-radius: 1rem;
    }

    .rounded-t-inherit {
        border-top-left-radius: inherit;
        border-top-right-radius: inherit;
    }

    .rounded-b-inherit {
        border-bottom-right-radius: inherit;
        border-bottom-left-radius: inherit;
    }

    .rounded-t-lg {
        border-top-left-radius: 0.5rem;
        border-top-right-radius: 0.5rem;
    }

    .rounded-b-lg {
        border-bottom-right-radius: 0.5rem;
        border-bottom-left-radius: 0.5rem;
    }

    .rounded-b-2xl {
        border-bottom-right-radius: 1rem;
        border-bottom-left-radius: 1rem;
    }

    .rounded-tr-none {
        border-top-right-radius: 0px;
    }

    .rounded-br-none {
        border-bottom-right-radius: 0px;
    }

    .rounded-tl-none {
        border-top-left-radius: 0px;
    }

    .rounded-bl-none {
        border-bottom-left-radius: 0px;
    }

    .rounded-bl-xl {
        border-bottom-left-radius: 0.75rem;
    }

    .border-0 {
        border-width: 0px;
    }

    .border {
        border-width: 1px;
    }

    .border-2 {
        border-width: 2px;
    }

    .border-r-0 {
        border-right-width: 0px;
    }

    .border-b-0 {
        border-bottom-width: 0px;
    }

    .border-b {
        border-bottom-width: 1px;
    }

    .border-t-0 {
        border-top-width: 0px;
    }

    .border-l-0 {
        border-left-width: 0px;
    }

    .border-solid {
        border-style: solid;
    }

    .border-blue-900 {
        --tw-border-opacity: 1;
        border-color: rgb(0 0 125 / var(--tw-border-opacity));
    }

    .border-white {
        --tw-border-opacity: 1;
        border-color: rgb(255 255 255 / var(--tw-border-opacity));
    }

    .border-transparent {
        border-color: transparent;
    }

    .border-gray-300 {
        --tw-border-opacity: 1;
        border-color: rgb(210 214 218 / var(--tw-border-opacity));
    }

    .border-fuchsia-500 {
        --tw-border-opacity: 1;
        border-color: rgb(203 12 159 / var(--tw-border-opacity));
    }

    .border-black\/12\.5 {
        border-color: rgb(0 0 0 / 0.125);
    }

    .border-gray-200 {
        --tw-border-opacity: 1;
        border-color: rgb(233 236 239 / var(--tw-border-opacity));
    }

    .border-slate-700 {
        --tw-border-opacity: 1;
        border-color: rgb(52 71 103 / var(--tw-border-opacity));
    }

    .border-slate-100 {
        --tw-border-opacity: 1;
        border-color: rgb(222 226 230 / var(--tw-border-opacity));
    }

    .border-red-600 {
        --tw-border-opacity: 1;
        border-color: rgb(234 6 6 / var(--tw-border-opacity));
    }

    .border-lime-500 {
        --tw-border-opacity: 1;
        border-color: rgb(130 214 22 / var(--tw-border-opacity));
    }

    .border-white\/75 {
        border-color: rgb(255 255 255 / 0.75);
    }

    .border-slate-200 {
        --tw-border-opacity: 1;
        border-color: rgb(203 211 218 / var(--tw-border-opacity));
    }

    .border-b-gray-200 {
        --tw-border-opacity: 1;
        border-bottom-color: rgb(233 236 239 / var(--tw-border-opacity));
    }

    .border-b-transparent {
        border-bottom-color: transparent;
    }

    .bg-gray-50 {
        --tw-bg-opacity: 1;
        background-color: rgb(248 249 250 / var(--tw-bg-opacity));
    }

    .bg-white {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .bg-transparent {
        background-color: transparent;
    }

    .bg-slate-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(103 116 142 / var(--tw-bg-opacity));
    }

    .bg-gray-200 {
        --tw-bg-opacity: 1;
        background-color: rgb(233 236 239 / var(--tw-bg-opacity));
    }

    .bg-slate-700 {
        --tw-bg-opacity: 1;
        background-color: rgb(52 71 103 / var(--tw-bg-opacity));
    }

    .bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity));
    }

    .bg-inherit {
        background-color: inherit;
    }

    .bg-fuchsia-500 {
        --tw-bg-opacity: 1;
        background-color: rgb(203 12 159 / var(--tw-bg-opacity));
    }

    .bg-slate-800\/10 {
        background-color: rgb(58 65 111 / 0.1);
    }

    .bg-white\/10 {
        background-color: rgb(255 255 255 / 0.1);
    }

    .bg-white\/80 {
        background-color: rgb(255 255 255 / 0.8);
    }

    .bg-gray-600 {
        --tw-bg-opacity: 1;
        background-color: rgb(108 117 125 / var(--tw-bg-opacity));
    }

    .bg-\[hsla\(0\2c 0\%\2c 100\%\2c 0\.8\)\] {
        background-color: hsla(0, 0%, 100%, 0.8);
    }

    .bg-gradient-horizontal-dark {
        background-image: linear-gradient(90deg, transparent, rgba(0, 0, 0, .4), transparent);
    }

    .bg-gradient-fuchsia {
        background-image: linear-gradient(310deg, #7928ca, #ff0080);
    }

    .bg-gradient-slate {
        background-image: linear-gradient(310deg, #627594, #a8b8d8);
    }

    .bg-gradient-dark-gray {
        background-image: linear-gradient(310deg, #141727, #3a416f);
    }

    .bg-gradient-cyan {
        background-image: linear-gradient(310deg, #2152ff, #21d4fd);
    }

    .bg-gradient-orange {
        background-image: linear-gradient(310deg, #f53939, #fbcf33);
    }

    .bg-gradient-red {
        background-image: linear-gradient(310deg, #ea0606, #ff667c);
    }

    .bg-gradient-lime {
        background-image: linear-gradient(310deg, #17ad37, #98ec2d);
    }

    .bg-none {
        background-image: none;
    }

    .bg-gradient-horizontal-light {
        background-image: linear-gradient(90deg, transparent, rgba(0, 0, 0, .1), transparent);
    }

    .bg-gradient-gray {
        background-image: linear-gradient(310deg, #ced4da, #ebeff4);
    }

    .bg-gradient-to-r {
        background-image: linear-gradient(to right, var(--tw-gradient-stops));
    }

    .from-transparent {
        --tw-gradient-from: transparent;
        --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to, rgb(0 0 0 / 0));
    }

    .via-black\/40 {
        --tw-gradient-stops: var(--tw-gradient-from), rgb(0 0 0 / 0.4), var(--tw-gradient-to, rgb(0 0 0 / 0));
    }

    .to-transparent {
        --tw-gradient-to: transparent;
    }

    .bg-cover {
        background-size: cover;
    }

    .bg-150 {
        background-size: 150%;
    }

    .bg-contain {
        background-size: contain;
    }

    .bg-clip-border {
        background-clip: border-box;
    }

    .bg-clip-padding {
        background-clip: padding-box;
    }

    .bg-clip-text {
        -webkit-background-clip: text;
        background-clip: text;
    }

    .bg-center {
        background-position: center;
    }

    .bg-x-25 {
        background-position: 25% 0;
    }

    .bg-left {
        background-position: left;
    }

    .bg-right {
        background-position: right;
    }

    .bg-no-repeat {
        background-repeat: no-repeat;
    }

    .fill-slate-800 {
        fill: #3a416f;
    }

    .fill-current {
        fill: currentColor;
    }

    .fill-transparent {
        fill: transparent;
    }

    .stroke-0 {
        stroke-width: 0;
    }

    .p-0 {
        padding: 0px;
    }

    .p-4 {
        padding: 1rem;
    }

    .p-6 {
        padding: 1.5rem;
    }

    .p-2 {
        padding: 0.5rem;
    }

    .p-1\.2 {
        padding: 0.3rem;
    }

    .p-1 {
        padding: 0.25rem;
    }

    .px-8 {
        padding-left: 2rem;
        padding-right: 2rem;
    }

    .py-6 {
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .py-2\.7 {
        padding-top: 0.675rem;
        padding-bottom: 0.675rem;
    }

    .px-4 {
        padding-left: 1rem;
        padding-right: 1rem;
    }

    .py-2 {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
    }

    .px-6 {
        padding-left: 1.5rem;
        padding-right: 1.5rem;
    }

    .py-3 {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
    }

    .px-0 {
        padding-left: 0px;
        padding-right: 0px;
    }

    .py-1 {
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
    }

    .px-2\.5 {
        padding-left: 0.625rem;
        padding-right: 0.625rem;
    }

    .px-2 {
        padding-left: 0.5rem;
        padding-right: 0.5rem;
    }

    .py-4 {
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .py-1\.2 {
        padding-top: 0.3rem;
        padding-bottom: 0.3rem;
    }

    .px-3 {
        padding-left: 0.75rem;
        padding-right: 0.75rem;
    }

    .py-2\.2-em {
        padding-top: 0.55em;
        padding-bottom: 0.55em;
    }

    .px-3\.6-em {
        padding-left: 0.9em;
        padding-right: 0.9em;
    }

    .px-16 {
        padding-left: 4rem;
        padding-right: 4rem;
    }

    .py-3\.5 {
        padding-top: 0.875rem;
        padding-bottom: 0.875rem;
    }

    .py-0 {
        padding-top: 0px;
        padding-bottom: 0px;
    }

    .px-1 {
        padding-left: 0.25rem;
        padding-right: 0.25rem;
    }

    .py-2\.375 {
        padding-top: .59375rem;
        padding-bottom: .59375rem;
    }

    .py-12 {
        padding-top: 3rem;
        padding-bottom: 3rem;
    }

    .pl-0 {
        padding-left: 0px;
    }

    .pl-6 {
        padding-left: 1.5rem;
    }

    .pt-1 {
        padding-top: 0.25rem;
    }

    .pl-2 {
        padding-left: 0.5rem;
    }

    .pl-8\.75 {
        padding-left: 2.1875rem;
    }

    .pr-3 {
        padding-right: 0.75rem;
    }

    .pl-8 {
        padding-left: 2rem;
    }

    .pl-4 {
        padding-left: 1rem;
    }

    .pr-2 {
        padding-right: 0.5rem;
    }

    .pt-2 {
        padding-top: 0.5rem;
    }

    .pt-6 {
        padding-top: 1.5rem;
    }

    .pr-1 {
        padding-right: 0.25rem;
    }

    .pb-0 {
        padding-bottom: 0px;
    }

    .pr-6 {
        padding-right: 1.5rem;
    }

    .pb-2 {
        padding-bottom: 0.5rem;
    }

    .pt-1\.4 {
        padding-top: 0.35rem;
    }

    .pt-4 {
        padding-top: 1rem;
    }

    .pt-0 {
        padding-top: 0px;
    }

    .pb-1 {
        padding-bottom: 0.25rem;
    }

    .pr-0 {
        padding-right: 0px;
    }

    .pr-4 {
        padding-right: 1rem;
    }

    .pl-1 {
        padding-left: 0.25rem;
    }

    .pr-8\.75 {
        padding-right: 2.1875rem;
    }

    .pr-8 {
        padding-right: 2rem;
    }

    .pr-10 {
        padding-right: 2.5rem;
    }

    .pl-3 {
        padding-left: 0.75rem;
    }

    .pl-12 {
        padding-left: 3rem;
    }

    .pt-12 {
        padding-top: 3rem;
    }

    .pb-56 {
        padding-bottom: 14rem;
    }

    .pl-6\.92-em {
        padding-left: 1.73em;
    }

    .pt-48 {
        padding-top: 12rem;
    }

    .text-left {
        text-align: left;
    }

    .text-center {
        text-align: center;
    }

    .text-right {
        text-align: right;
    }

    .align-baseline {
        vertical-align: baseline;
    }

    .align-top {
        vertical-align: top;
    }

    .align-middle {
        vertical-align: middle;
    }

    .align-bottom {
        vertical-align: bottom;
    }

    .font-sans {
        font-family: Open Sans;
    }

    .text-size-base {
        font-size: 1rem;
    }

    .text-size-sm {
        font-size: 0.875rem;
    }

    .text-size-xs {
        font-size: 0.75rem;
    }

    .text-size-lg {
        font-size: 1.125rem;
    }

    .text-size-xxs {
        font-size: 0.65rem;
    }

    .text-size-xl {
        font-size: 1.25rem;
    }

    .text-xs {
        font-size: 0.75rem;
        line-height: 1rem;
    }

    .text-size-inherit {
        font-size: inherit;
    }

    .text-size-3xs {
        font-size: 0.5rem;
    }

    .text-size-xs-em {
        font-size: 0.75em;
    }

    .text-size-banner-calculate {
        font-size: calc(1.625rem+4.5vw);
    }

    .font-normal {
        font-weight: 400;
    }

    .font-semibold {
        font-weight: 600;
    }

    .font-bold {
        font-weight: 700;
    }

    .uppercase {
        text-transform: uppercase;
    }

    .capitalize {
        text-transform: capitalize;
    }

    .leading-default {
        line-height: 1.6;
    }

    .leading-tight {
        line-height: 1.25;
    }

    .leading-pro {
        line-height: 1.4;
    }

    .leading-normal {
        line-height: 1.5;
    }

    .leading-5\.6 {
        line-height: 1.4rem;
    }

    .leading-5 {
        line-height: 1.25rem;
    }

    .leading-none {
        line-height: 1;
    }

    .leading-tighter {
        line-height: 1.2;
    }

    .tracking-tight-soft {
        letter-spacing: -0.025rem;
    }

    .tracking-normal {
        letter-spacing: 0em;
    }

    .tracking-none {
        letter-spacing: 0;
    }

    .tracking-tight {
        letter-spacing: -0.025em;
    }

    .text-slate-500 {
        --tw-text-opacity: 1;
        color: rgb(103 116 142 / var(--tw-text-opacity));
    }

    .text-slate-400 {
        --tw-text-opacity: 1;
        color: rgb(131 146 171 / var(--tw-text-opacity));
    }

    .text-slate-700 {
        --tw-text-opacity: 1;
        color: rgb(52 71 103 / var(--tw-text-opacity));
    }

    .text-gray-800 {
        --tw-text-opacity: 1;
        color: rgb(37 47 64 / var(--tw-text-opacity));
    }

    .text-red-500 {
        --tw-text-opacity: 1;
        color: rgb(245 57 57 / var(--tw-text-opacity));
    }

    .text-red-600 {
        --tw-text-opacity: 1;
        color: rgb(234 6 6 / var(--tw-text-opacity));
    }

    .text-lime-500 {
        --tw-text-opacity: 1;
        color: rgb(130 214 22 / var(--tw-text-opacity));
    }

    .text-cyan-500 {
        --tw-text-opacity: 1;
        color: rgb(23 193 232 / var(--tw-text-opacity));
    }

    .text-fuchsia-500 {
        --tw-text-opacity: 1;
        color: rgb(203 12 159 / var(--tw-text-opacity));
    }

    .text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .text-transparent {
        color: transparent;
    }

    .text-black {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity));
    }

    .text-gray-700 {
        --tw-text-opacity: 1;
        color: rgb(73 80 87 / var(--tw-text-opacity));
    }

    .text-neutral-900 {
        --tw-text-opacity: 1;
        color: rgb(17 17 17 / var(--tw-text-opacity));
    }

    .text-inherit {
        color: inherit;
    }

    .text-blue-800 {
        --tw-text-opacity: 1;
        color: rgb(52 78 134 / var(--tw-text-opacity));
    }

    .text-sky-600 {
        --tw-text-opacity: 1;
        color: rgb(62 161 236 / var(--tw-text-opacity));
    }

    .text-sky-900 {
        --tw-text-opacity: 1;
        color: rgb(14 69 109 / var(--tw-text-opacity));
    }

    .text-slate-800 {
        --tw-text-opacity: 1;
        color: rgb(58 65 111 / var(--tw-text-opacity));
    }

    .text-gray-200 {
        --tw-text-opacity: 1;
        color: rgb(233 236 239 / var(--tw-text-opacity));
    }

    .underline {
        -webkit-text-decoration-line: underline;
        text-decoration-line: underline;
    }

    .antialiased {
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .opacity-50 {
        opacity: 0.5;
    }

    .opacity-60 {
        opacity: 0.6;
    }

    .opacity-100 {
        opacity: 1;
    }

    .opacity-80 {
        opacity: 0.8;
    }

    .opacity-0 {
        opacity: 0;
    }

    .opacity-70 {
        opacity: 0.7;
    }

    .shadow-none {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-xl {
        --tw-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
        --tw-shadow-colored: 0 20px 27px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-2xl {
        --tw-shadow: 0 .3125rem .625rem 0 rgba(0, 0, 0, .12);
        --tw-shadow-colored: 0 .3125rem .625rem 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-md {
        --tw-shadow: 0 4px 7px -1px rgba(0, 0, 0, .11), 0 2px 4px -1px rgba(0, 0, 0, .07);
        --tw-shadow-colored: 0 4px 7px -1px var(--tw-shadow-color), 0 2px 4px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-3xl {
        --tw-shadow: 0 8px 26px -4px hsla(0, 0%, 8%, .15), 0 8px 9px -5px hsla(0, 0%, 8%, .06);
        --tw-shadow-colored: 0 8px 26px -4px var(--tw-shadow-color), 0 8px 9px -5px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-lg {
        --tw-shadow: 0 2px 12px 0 rgba(0, 0, 0, .16);
        --tw-shadow-colored: 0 2px 12px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-xl {
        --tw-shadow: 0 23px 45px -11px hsla(0, 0%, 8%, .25);
        --tw-shadow-colored: 0 23px 45px -11px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-blur {
        --tw-shadow: inset 0 0 1px 1px hsla(0, 0%, 100%, .9), 0 20px 27px 0 rgba(0, 0, 0, .05);
        --tw-shadow-colored: inset 0 0 1px 1px var(--tw-shadow-color), 0 20px 27px 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-sm {
        --tw-shadow: 0 .25rem .375rem -.0625rem hsla(0, 0%, 8%, .12), 0 .125rem .25rem -.0625rem hsla(0, 0%, 8%, .07);
        --tw-shadow-colored: 0 .25rem .375rem -.0625rem var(--tw-shadow-color), 0 .125rem .25rem -.0625rem var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-soft-xxs {
        --tw-shadow: 0 1px 5px 1px #ddd;
        --tw-shadow-colored: 0 1px 5px 1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .shadow-transparent {
        --tw-shadow-color: transparent;
        --tw-shadow: var(--tw-shadow-colored);
    }

    .blur {
        --tw-blur: blur(8px);
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .filter {
        filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow);
    }

    .backdrop-blur-2xl {
        --tw-backdrop-blur: blur(30px);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-blur-\[30px\] {
        --tw-backdrop-blur: blur(30px);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-saturate-200 {
        --tw-backdrop-saturate: saturate(2);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .backdrop-saturate-\[200\%\] {
        --tw-backdrop-saturate: saturate(200%);
        -webkit-backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
        backdrop-filter: var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);
    }

    .transition-transform {
        transition-property: transform;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .transition-all {
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .transition-colors {
        transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .transition {
        transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
        transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .duration-200 {
        transition-duration: 200ms;
    }

    .duration-300 {
        transition-duration: 300ms;
    }

    .duration-250 {
        transition-duration: 250ms;
    }

    .duration-600 {
        transition-duration: 600ms;
    }

    .duration-500 {
        transition-duration: 500ms;
    }

    .duration-350 {
        transition-duration: 350ms;
    }

    .ease-soft {
        transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
    }

    .ease-in {
        transition-timing-function: cubic-bezier(0.4, 0, 1, 1);
    }

    .ease-soft-in-out {
        transition-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
    }

    .ease-soft-in {
        transition-timing-function: cubic-bezier(0.42, 0, 1, 1);
    }

    .ease-bounce {
        transition-timing-function: cubic-bezier(0.34, 1.61, 0.7, 1.3);
    }

    .ease-soft-out {
        transition-timing-function: cubic-bezier(0, 0, 0.58, 1);
    }

    .transform3d {
        transform: perspective(999px) rotateX(0deg) translateZ(0);
    }

    .transform-dropdown {
        transform: perspective(999px) rotateX(-10deg) translateZ(0) translate3d(0, 37px, 0);
    }

    .transform-dropdown-show {
        transform: perspective(999px) rotateX(0deg) translateZ(0) translate3d(0, 37px, 5px);
    }

    .flex-wrap-inherit {
        flex-wrap: inherit;
    }

    .placeholder\:text-gray-500::-moz-placeholder {
        --tw-text-opacity: 1;
        color: rgb(173 181 189 / var(--tw-text-opacity));
    }

    .placeholder\:text-gray-500:-ms-input-placeholder {
        --tw-text-opacity: 1;
        color: rgb(173 181 189 / var(--tw-text-opacity));
    }

    .placeholder\:text-gray-500::placeholder {
        --tw-text-opacity: 1;
        color: rgb(173 181 189 / var(--tw-text-opacity));
    }

    .before\:visible::before {
        content: var(--tw-content);
        visibility: visible;
    }

    .before\:absolute::before {
        content: var(--tw-content);
        position: absolute;
    }

    .before\:right-2::before {
        content: var(--tw-content);
        right: 0.5rem;
    }

    .before\:left-auto::before {
        content: var(--tw-content);
        left: auto;
    }

    .before\:top-0::before {
        content: var(--tw-content);
        top: 0px;
    }

    .before\:right-7::before {
        content: var(--tw-content);
        right: 1.75rem;
    }

    .before\:left-4::before {
        content: var(--tw-content);
        left: 1rem;
    }

    .before\:right-auto::before {
        content: var(--tw-content);
        right: auto;
    }

    .before\:left-2::before {
        content: var(--tw-content);
        left: 0.5rem;
    }

    .before\:left-7::before {
        content: var(--tw-content);
        left: 1.75rem;
    }

    .before\:right-4::before {
        content: var(--tw-content);
        right: 1rem;
    }

    .before\:-top-5::before {
        content: var(--tw-content);
        top: -1.25rem;
    }

    .before\:z-50::before {
        content: var(--tw-content);
        z-index: 50;
    }

    .before\:z-40::before {
        content: var(--tw-content);
        z-index: 40;
    }

    .before\:float-right::before {
        content: var(--tw-content);
        float: right;
    }

    .before\:float-left::before {
        content: var(--tw-content);
        float: left;
    }

    .before\:inline-block::before {
        content: var(--tw-content);
        display: inline-block;
    }

    .before\:h-2::before {
        content: var(--tw-content);
        height: 0.5rem;
    }

    .before\:h-full::before {
        content: var(--tw-content);
        height: 100%;
    }

    .before\:w-2::before {
        content: var(--tw-content);
        width: 0.5rem;
    }

    .before\:rotate-45::before {
        content: var(--tw-content);
        --tw-rotate: 45deg;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .before\:border-r-2::before {
        content: var(--tw-content);
        border-right-width: 2px;
    }

    .before\:border-l-2::before {
        content: var(--tw-content);
        border-left-width: 2px;
    }

    .before\:border-r-slate-100::before {
        content: var(--tw-content);
        --tw-border-opacity: 1;
        border-right-color: rgb(222 226 230 / var(--tw-border-opacity));
    }

    .before\:border-l-slate-100::before {
        content: var(--tw-content);
        --tw-border-opacity: 1;
        border-left-color: rgb(222 226 230 / var(--tw-border-opacity));
    }

    .before\:bg-inherit::before {
        content: var(--tw-content);
        background-color: inherit;
    }

    .before\:pr-2::before {
        content: var(--tw-content);
        padding-right: 0.5rem;
    }

    .before\:pl-2::before {
        content: var(--tw-content);
        padding-left: 0.5rem;
    }

    .before\:font-awesome::before {
        content: var(--tw-content);
        font-family: FontAwesome;
    }

    .before\:text-5\.5::before {
        content: var(--tw-content);
        font-size: 1.375rem;
    }

    .before\:text-5::before {
        content: var(--tw-content);
        font-size: 1.25rem;
    }

    .before\:font-normal::before {
        content: var(--tw-content);
        font-weight: 400;
    }

    .before\:leading-default::before {
        content: var(--tw-content);
        line-height: 1.6;
    }

    .before\:text-gray-600::before {
        content: var(--tw-content);
        --tw-text-opacity: 1;
        color: rgb(108 117 125 / var(--tw-text-opacity));
    }

    .before\:text-white::before {
        content: var(--tw-content);
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .before\:antialiased::before {
        content: var(--tw-content);
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
    }

    .before\:transition-all::before {
        content: var(--tw-content);
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .before\:duration-350::before {
        content: var(--tw-content);
        transition-duration: 350ms;
    }

    .before\:ease-soft::before {
        content: var(--tw-content);
        transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
    }

    .before\:content-\[\'\/\'\]::before {
        --tw-content: '/';
        content: var(--tw-content);
    }

    .before\:content-\[\'\\f0d8\'\]::before {
        --tw-content: '\f0d8';
        content: var(--tw-content);
    }

    .before\:content-\[\'\'\]::before {
        --tw-content: '';
        content: var(--tw-content);
    }

    .after\:absolute::after {
        content: var(--tw-content);
        position: absolute;
    }

    .after\:top-0::after {
        content: var(--tw-content);
        top: 0px;
    }

    .after\:bottom-0::after {
        content: var(--tw-content);
        bottom: 0px;
    }

    .after\:left-0::after {
        content: var(--tw-content);
        left: 0px;
    }

    .after\:top-px::after {
        content: var(--tw-content);
        top: 1px;
    }

    .after\:z-10::after {
        content: var(--tw-content);
        z-index: 10;
    }

    .after\:clear-both::after {
        content: var(--tw-content);
        clear: both;
    }

    .after\:block::after {
        content: var(--tw-content);
        display: block;
    }

    .after\:flex::after {
        content: var(--tw-content);
        display: flex;
    }

    .after\:table::after {
        content: var(--tw-content);
        display: table;
    }

    .after\:h-full::after {
        content: var(--tw-content);
        height: 100%;
    }

    .after\:h-4::after {
        content: var(--tw-content);
        height: 1rem;
    }

    .after\:w-full::after {
        content: var(--tw-content);
        width: 100%;
    }

    .after\:w-4::after {
        content: var(--tw-content);
        width: 1rem;
    }

    .after\:translate-x-px::after {
        content: var(--tw-content);
        --tw-translate-x: 1px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .after\:-translate-x-px::after {
        content: var(--tw-content);
        --tw-translate-x: -1px;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .after\:items-center::after {
        content: var(--tw-content);
        align-items: center;
    }

    .after\:justify-center::after {
        content: var(--tw-content);
        justify-content: center;
    }

    .after\:rounded-2xl::after {
        content: var(--tw-content);
        border-radius: 1rem;
    }

    .after\:rounded-circle::after {
        content: var(--tw-content);
        border-radius: 50%;
    }

    .after\:bg-white::after {
        content: var(--tw-content);
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .after\:bg-gradient-dark-gray::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #141727, #3a416f);
    }

    .after\:bg-gradient-cyan::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #2152ff, #21d4fd);
    }

    .after\:bg-gradient-orange::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #f53939, #fbcf33);
    }

    .after\:bg-gradient-lime::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #17ad37, #98ec2d);
    }

    .after\:bg-gradient-red::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #ea0606, #ff667c);
    }

    .after\:bg-gradient-slate::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #627594, #a8b8d8);
    }

    .after\:bg-gradient-fuchsia::after {
        content: var(--tw-content);
        background-image: linear-gradient(310deg, #7928ca, #ff0080);
    }

    .after\:font-awesome::after {
        content: var(--tw-content);
        font-family: FontAwesome;
    }

    .after\:text-size-fa-check::after {
        content: var(--tw-content);
        font-size: 0.67rem;
    }

    .after\:text-white::after {
        content: var(--tw-content);
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .after\:opacity-65::after {
        content: var(--tw-content);
        opacity: 0.65;
    }

    .after\:opacity-0::after {
        content: var(--tw-content);
        opacity: 0;
    }

    .after\:opacity-85::after {
        content: var(--tw-content);
        opacity: 0.85;
    }

    .after\:shadow-soft-2xl::after {
        content: var(--tw-content);
        --tw-shadow: 0 .3125rem .625rem 0 rgba(0, 0, 0, .12);
        --tw-shadow-colored: 0 .3125rem .625rem 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .after\:transition-all::after {
        content: var(--tw-content);
        transition-property: all;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .after\:duration-250::after {
        content: var(--tw-content);
        transition-duration: 250ms;
    }

    .after\:ease-soft-in-out::after {
        content: var(--tw-content);
        transition-timing-function: cubic-bezier(0.42, 0, 0.58, 1);
    }

    .after\:content-\[\'\'\]::after {
        --tw-content: '';
        content: var(--tw-content);
    }

    .after\:content-\[\'\\f00c\'\]::after {
        --tw-content: '\f00c';
        content: var(--tw-content);
    }

    .checked\:border-0:checked {
        border-width: 0px;
    }

    .checked\:border-slate-800\/95:checked {
        border-color: rgb(58 65 111 / 0.95);
    }

    .checked\:border-transparent:checked {
        border-color: transparent;
    }

    .checked\:bg-slate-800\/95:checked {
        background-color: rgb(58 65 111 / 0.95);
    }

    .checked\:bg-transparent:checked {
        background-color: transparent;
    }

    .checked\:bg-none:checked {
        background-image: none;
    }

    .checked\:bg-gradient-dark-gray:checked {
        background-image: linear-gradient(310deg, #141727, #3a416f);
    }

    .checked\:bg-right:checked {
        background-position: right;
    }

    .checked\:after\:translate-x-5\.25:checked::after {
        content: var(--tw-content);
        --tw-translate-x: 1.3125rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .checked\:after\:translate-x-5:checked::after {
        content: var(--tw-content);
        --tw-translate-x: 1.25rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .checked\:after\:-translate-x-5\.25:checked::after {
        content: var(--tw-content);
        --tw-translate-x: -1.3125rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .checked\:after\:-translate-x-5:checked::after {
        content: var(--tw-content);
        --tw-translate-x: -1.25rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .checked\:after\:opacity-100:checked::after {
        content: var(--tw-content);
        opacity: 1;
    }

    .hover\:z-30:hover {
        z-index: 30;
    }

    .hover\:scale-102:hover {
        --tw-scale-x: 1.02;
        --tw-scale-y: 1.02;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .hover\:border-fuchsia-500:hover {
        --tw-border-opacity: 1;
        border-color: rgb(203 12 159 / var(--tw-border-opacity));
    }

    .hover\:border-slate-700:hover {
        --tw-border-opacity: 1;
        border-color: rgb(52 71 103 / var(--tw-border-opacity));
    }

    .hover\:border-white:hover {
        --tw-border-opacity: 1;
        border-color: rgb(255 255 255 / var(--tw-border-opacity));
    }

    .hover\:border-white\/75:hover {
        border-color: rgb(255 255 255 / 0.75);
    }

    .hover\:bg-transparent:hover {
        background-color: transparent;
    }

    .hover\:bg-gray-200:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(233 236 239 / var(--tw-bg-opacity));
    }

    .hover\:bg-white\/10:hover {
        background-color: rgb(255 255 255 / 0.1);
    }

    .hover\:bg-slate-700:hover {
        --tw-bg-opacity: 1;
        background-color: rgb(52 71 103 / var(--tw-bg-opacity));
    }

    .hover\:text-fuchsia-500:hover {
        --tw-text-opacity: 1;
        color: rgb(203 12 159 / var(--tw-text-opacity));
    }

    .hover\:text-slate-700:hover {
        --tw-text-opacity: 1;
        color: rgb(52 71 103 / var(--tw-text-opacity));
    }

    .hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .hover\:text-fuchsia-800:hover {
        --tw-text-opacity: 1;
        color: rgb(131 8 102 / var(--tw-text-opacity));
    }

    .hover\:opacity-75:hover {
        opacity: 0.75;
    }

    .hover\:shadow-soft-2xl:hover {
        --tw-shadow: 0 .3125rem .625rem 0 rgba(0, 0, 0, .12);
        --tw-shadow-colored: 0 .3125rem .625rem 0 var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:shadow-none:hover {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:shadow-soft-xs:hover {
        --tw-shadow: 0 3px 5px -1px rgba(0, 0, 0, .09), 0 2px 3px -1px rgba(0, 0, 0, .07);
        --tw-shadow-colored: 0 3px 5px -1px var(--tw-shadow-color), 0 2px 3px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:transform3d-hover:hover {
        transform: perspective(999px) rotateX(7deg) translate3d(0, -4px, 5px);
    }

    .focus\:border-fuchsia-300:focus {
        --tw-border-opacity: 1;
        border-color: rgb(226 147 211 / var(--tw-border-opacity));
    }

    .focus\:bg-white:focus {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .focus\:text-gray-700:focus {
        --tw-text-opacity: 1;
        color: rgb(73 80 87 / var(--tw-text-opacity));
    }

    .focus\:shadow-soft-primary-outline:focus {
        --tw-shadow: 0 0 0 2px #e9aede;
        --tw-shadow-colored: 0 0 0 2px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .focus\:outline-none:focus {
        outline: 2px solid transparent;
        outline-offset: 2px;
    }

    .focus\:transition-shadow:focus {
        transition-property: box-shadow;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        transition-duration: 150ms;
    }

    .active\:scale-100:active {
        --tw-scale-x: 1;
        --tw-scale-y: 1;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .active\:border-fuchsia-500:active {
        --tw-border-opacity: 1;
        border-color: rgb(203 12 159 / var(--tw-border-opacity));
    }

    .active\:border-white\/75:active {
        border-color: rgb(255 255 255 / 0.75);
    }

    .active\:bg-fuchsia-500:active {
        --tw-bg-opacity: 1;
        background-color: rgb(203 12 159 / var(--tw-bg-opacity));
    }

    .active\:bg-slate-700:active {
        --tw-bg-opacity: 1;
        background-color: rgb(52 71 103 / var(--tw-bg-opacity));
    }

    .active\:bg-white:active {
        --tw-bg-opacity: 1;
        background-color: rgb(255 255 255 / var(--tw-bg-opacity));
    }

    .active\:text-white:active {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .active\:text-black:active {
        --tw-text-opacity: 1;
        color: rgb(0 0 0 / var(--tw-text-opacity));
    }

    .active\:opacity-85:active {
        opacity: 0.85;
    }

    .active\:shadow-soft-xs:active {
        --tw-shadow: 0 3px 5px -1px rgba(0, 0, 0, .09), 0 2px 3px -1px rgba(0, 0, 0, .07);
        --tw-shadow-colored: 0 3px 5px -1px var(--tw-shadow-color), 0 2px 3px -1px var(--tw-shadow-color);
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .hover\:active\:scale-102:active:hover {
        --tw-scale-x: 1.02;
        --tw-scale-y: 1.02;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .active\:hover\:scale-102:hover:active {
        --tw-scale-x: 1.02;
        --tw-scale-y: 1.02;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .active\:hover\:border-fuchsia-500:hover:active {
        --tw-border-opacity: 1;
        border-color: rgb(203 12 159 / var(--tw-border-opacity));
    }

    .active\:hover\:border-white\/75:hover:active {
        border-color: rgb(255 255 255 / 0.75);
    }

    .active\:hover\:bg-transparent:hover:active {
        background-color: transparent;
    }

    .active\:hover\:bg-white\/10:hover:active {
        background-color: rgb(255 255 255 / 0.1);
    }

    .active\:hover\:text-fuchsia-500:hover:active {
        --tw-text-opacity: 1;
        color: rgb(203 12 159 / var(--tw-text-opacity));
    }

    .active\:hover\:text-slate-700:hover:active {
        --tw-text-opacity: 1;
        color: rgb(52 71 103 / var(--tw-text-opacity));
    }

    .active\:hover\:text-white:hover:active {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity));
    }

    .active\:hover\:opacity-75:hover:active {
        opacity: 0.75;
    }

    .active\:hover\:shadow-none:hover:active {
        --tw-shadow: 0 0 #0000;
        --tw-shadow-colored: 0 0 #0000;
        box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
    }

    .group:hover .group-hover\:translate-x-1\.25 {
        --tw-translate-x: 0.3125rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:translate-x-1 {
        --tw-translate-x: 0.25rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:-translate-x-1\.25 {
        --tw-translate-x: -0.3125rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    .group:hover .group-hover\:-translate-x-1 {
        --tw-translate-x: -0.25rem;
        transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    }

    @media (min-width: 576px) {
        .sm\:my-6 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .sm\:my-auto {
            margin-top: auto;
            margin-bottom: auto;
        }

        .sm\:mr-16 {
            margin-right: 4rem;
        }

        .sm\:mt-0 {
            margin-top: 0px;
        }

        .sm\:mr-6 {
            margin-right: 1.5rem;
        }

        .sm\:mr-1 {
            margin-right: 0.25rem;
        }

        .sm\:-mr-6 {
            margin-right: -1.5rem;
        }

        .sm\:ml-2 {
            margin-left: 0.5rem;
        }

        .sm\:mr-0 {
            margin-right: 0px;
        }

        .sm\:mb-0 {
            margin-bottom: 0px;
        }

        .sm\:inline {
            display: inline;
        }

        .sm\:w-1\/2 {
            width: 50%;
        }

        .sm\:flex-none {
            flex: none;
        }

        .sm\:px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .sm\:pt-4 {
            padding-top: 1rem;
        }

        .before\:sm\:right-7\.5::before {
            content: var(--tw-content);
            right: 1.875rem;
        }

        .before\:sm\:right-7::before {
            content: var(--tw-content);
            right: 1.75rem;
        }

        .before\:sm\:left-3::before {
            content: var(--tw-content);
            left: 0.75rem;
        }
    }

    @media (min-width: 768px) {
        .md\:mr-0 {
            margin-right: 0px;
        }

        .md\:ml-auto {
            margin-left: auto;
        }

        .md\:mb-0 {
            margin-bottom: 0px;
        }

        .md\:mt-0 {
            margin-top: 0px;
        }

        .md\:-mt-56 {
            margin-top: -14rem;
        }

        .md\:block {
            display: block;
        }

        .md\:w-1\/2 {
            width: 50%;
        }

        .md\:w-8\/12 {
            width: 66.666667%;
        }

        .md\:w-7\/12 {
            width: 58.333333%;
        }

        .md\:w-5\/12 {
            width: 41.666667%;
        }

        .md\:w-4\/12 {
            width: 33.333333%;
        }

        .md\:w-6\/12 {
            width: 50%;
        }

        .md\:w-1\/12 {
            width: 8.333333%;
        }

        .md\:w-11\/12 {
            width: 91.666667%;
        }

        .md\:flex-none {
            flex: none;
        }

        .md\:flex-0 {
            flex: 0 0 auto;
        }

        .md\:scale-70 {
            --tw-scale-x: .7;
            --tw-scale-y: .7;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .md\:pr-4 {
            padding-right: 1rem;
        }
    }

    @media (max-width: 768px) {
        .md-max\:w-full {
            width: 100%;
        }
    }

    @media (min-width: 992px) {
        .lg\:absolute {
            position: absolute;
        }

        .lg\:right-0 {
            right: 0px;
        }

        .lg\:left-auto {
            left: auto;
        }

        .lg\:float-right {
            float: right;
        }

        .lg\:mt-2 {
            margin-top: 0.5rem;
        }

        .lg\:mb-0 {
            margin-bottom: 0px;
        }

        .lg\:mt-0 {
            margin-top: 0px;
        }

        .lg\:ml-0 {
            margin-left: 0px;
        }

        .lg\:-mt-48 {
            margin-top: -12rem;
        }

        .lg\:ml-12 {
            margin-left: 3rem;
        }

        .lg\:-mt-6 {
            margin-top: -1.5rem;
        }

        .lg\:block {
            display: block;
        }

        .lg\:flex {
            display: flex;
        }

        .lg\:hidden {
            display: none;
        }

        .lg\:w-7\/12 {
            width: 58.333333%;
        }

        .lg\:w-1\/2 {
            width: 50%;
        }

        .lg\:w-5\/12 {
            width: 41.666667%;
        }

        .lg\:w-2\/3 {
            width: 66.666667%;
        }

        .lg\:w-1\/3 {
            width: 33.333333%;
        }

        .lg\:w-full {
            width: 100%;
        }

        .lg\:w-4\/12 {
            width: 33.333333%;
        }

        .lg\:w-8\/12 {
            width: 66.666667%;
        }

        .lg\:max-w-120 {
            max-width: 30rem;
        }

        .lg\:flex-none {
            flex: none;
        }

        .lg\:flex-0 {
            flex: 0 0 auto;
        }

        .lg\:basis-auto {
            flex-basis: auto;
        }

        .lg\:cursor-pointer {
            cursor: pointer;
        }

        .lg\:flex-row {
            flex-direction: row;
        }

        .lg\:flex-nowrap {
            flex-wrap: nowrap;
        }

        .lg\:justify-start {
            justify-content: flex-start;
        }

        .lg\:justify-end {
            justify-content: flex-end;
        }

        .lg\:justify-between {
            justify-content: space-between;
        }

        .lg\:px-2 {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .lg\:pt-0 {
            padding-top: 0px;
        }

        .lg\:text-left {
            text-align: left;
        }

        .lg\:text-right {
            text-align: right;
        }

        .lg\:shadow-soft-3xl {
            --tw-shadow: 0 8px 26px -4px hsla(0, 0%, 8%, .15), 0 8px 9px -5px hsla(0, 0%, 8%, .06);
            --tw-shadow-colored: 0 8px 26px -4px var(--tw-shadow-color), 0 8px 9px -5px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .lg\:transition-colors {
            transition-property: color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke;
            transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;
            transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            transition-duration: 150ms;
        }

        .lg\:duration-300 {
            transition-duration: 300ms;
        }

        .lg\:ease-soft {
            transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
        }

        .before\:lg\:-ml-px::before {
            content: var(--tw-content);
            margin-left: -1px;
        }

        .before\:lg\:-mr-px::before {
            content: var(--tw-content);
            margin-right: -1px;
        }

        .lg\:hover\:text-white\/75:hover {
            color: rgb(255 255 255 / 0.75);
        }
    }

    @media (max-width: 992px) {
        .lg-max\:mt-6 {
            margin-top: 1.5rem;
        }

        .lg-max\:max-h-0 {
            max-height: 0px;
        }

        .lg-max\:max-h-54 {
            max-height: 13.5rem;
        }

        .lg-max\:overflow-hidden {
            overflow: hidden;
        }

        .lg-max\:bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .lg-max\:text-slate-700 {
            --tw-text-opacity: 1;
            color: rgb(52 71 103 / var(--tw-text-opacity));
        }

        .lg-max\:opacity-0 {
            opacity: 0;
        }
    }

    @media (min-width: 1200px) {
        .xl\:left-0 {
            left: 0px;
        }

        .xl\:right-0 {
            right: 0px;
        }

        .xl\:left-\[18\%\] {
            left: 18%;
        }

        .xl\:ml-68\.5 {
            margin-left: 17.125rem;
        }

        .xl\:ml-68 {
            margin-left: 17rem;
        }

        .xl\:mb-0 {
            margin-bottom: 0px;
        }

        .xl\:mr-68\.5 {
            margin-right: 17.125rem;
        }

        .xl\:mr-68 {
            margin-right: 17rem;
        }

        .xl\:ml-auto {
            margin-left: auto;
        }

        .xl\:mr-12 {
            margin-right: 3rem;
        }

        .xl\:ml-4 {
            margin-left: 1rem;
        }

        .xl\:hidden {
            display: none;
        }

        .xl\:w-1\/4 {
            width: 25%;
        }

        .xl\:w-1\/2 {
            width: 50%;
        }

        .xl\:w-4\/12 {
            width: 33.333333%;
        }

        .xl\:w-3\/12 {
            width: 25%;
        }

        .xl\:flex-none {
            flex: none;
        }

        .xl\:translate-x-0 {
            --tw-translate-x: 0px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        .xl\:scale-60 {
            --tw-scale-x: .6;
            --tw-scale-y: .6;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
        }

        @-webkit-keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fade-up {
            from {
                opacity: 0;
                transform: translateY(100%);
            }

            to {
                opacity: 1;
            }
        }

        .xl\:animate-fade-up {
            -webkit-animation: fade-up 1.5s both;
            animation: fade-up 1.5s both;
        }

        .xl\:bg-transparent {
            background-color: transparent;
        }

        .xl\:bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity));
        }

        .xl\:p-2\.5 {
            padding: 0.625rem;
        }

        .xl\:p-2 {
            padding: 0.5rem;
        }

        .xl\:px-12 {
            padding-left: 3rem;
            padding-right: 3rem;
        }

        .xl\:text-size-8xl {
            font-size: 5rem;
        }
    }

    @media (max-width: 1200px) {
        .xl-max\:pointer-events-none {
            pointer-events: none;
        }

        .xl-max\:cursor-not-allowed {
            cursor: not-allowed;
        }

        .xl-max\:border-0 {
            border-width: 0px;
        }

        .xl-max\:bg-gradient-fuchsia {
            background-image: linear-gradient(310deg, #7928ca, #ff0080);
        }

        .xl-max\:text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity));
        }

        .xl-max\:opacity-65 {
            opacity: 0.65;
        }
    }
</style>

<div>
    <div class="w-full max-w-full lg:w-12/12 lg:flex-none">
        <div class="border-black/12.5 mb-0 rounded-t-2xl border-b-0 border-solid bg-white p-6 pb-0">
            <div class="flex flex-wrap justify-between mt-0 -mx-3">
                <div class="flex-none max-w-full px-3 mt-0">
                    <h6>Laporan Kerja per Bulan</h6>
                    <span>
                        {{ $startMonth }} - {{ $endMonth }}
                    </span>
                </div>
            </div>
        </div>
        <div class="flex-auto p-6 px-0 pb-2">
            <div class="overflow-x-auto">
                <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                    <thead class="align-bottom">
                        <tr>
                            <th
                                class="px-6 py-3 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                Nama</th>
                            <th
                                class="px-6 py-3 pl-2 font-bold tracking-normal text-left uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                kategori</th>
                            <th
                                class="px-6 py-3 font-bold tracking-normal text-center uppercase align-middle bg-transparent border-b letter border-b-solid text-size-xxs whitespace-nowrap border-b-gray-200 text-slate-400 opacity-70">
                                skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($userCategories as $userCategory)
                            <tr>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <div class="flex px-2 py-1">
                                        <div class="flex flex-col justify-center">
                                            <h6 class="mb-0 leading-normal text-size-sm">
                                                {{ $userCategory->name }}
                                            </h6>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap">
                                    <span class="font-semibold leading-tight text-size-xs text-slate-400">
                                        @foreach ($userCategory->category->pluck('name')->countBy() as $name => $count)
                                            {{ $name }} : {{ $count }} <br>
                                        @endforeach
                                    </span>
                                </td>
                                <td
                                    class="p-2 leading-normal text-center align-middle bg-transparent border-b text-size-sm whitespace-nowrap">
                                    <span
                                        class="font-semibold leading-tight text-size-xs">{{ $userCategory->category->sum('score') }}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
