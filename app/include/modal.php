<?php
if (isset($_GET['status'])) {
  if ($_GET['status'] == "success") {
?>

<div id="successModal" class="modal">
  <div class="modal-content">
    <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox="0 0 24 24"%3E%3Cpath fill="%234CAF50" d="M23.334 11.96c-.713-.726-.872-1.829-.393-2.727.342-.64.366-1.401.064-2.062-.301-.66-.893-1.142-1.601-1.302-.991-.225-1.722-1.067-1.803-2.081-.059-.723-.451-1.378-1.062-1.77-.609-.393-1.367-.478-2.05-.229-.956.347-2.026.032-2.642-.776-.44-.576-1.124-.915-1.85-.915-.725 0-1.409.339-1.849.915-.613.809-1.683 1.124-2.639.777-.682-.248-1.44-.163-2.05.229-.61.392-1.003 1.047-1.061 1.77-.082 1.014-.812 1.857-1.803 2.081-.708.16-1.3.642-1.601 1.302s-.277 1.422.065 2.061c.479.897.32 2.001-.392 2.727-.509.517-.747 1.242-.644 1.96s.536 1.347 1.17 1.7c.888.495 1.352 1.51 1.144 2.505-.147.71.044 1.448.519 1.996.476.549 1.18.844 1.902.798 1.016-.063 1.953.54 2.317 1.489.259.678.82 1.195 1.517 1.399.695.204 1.447.072 2.031-.357.819-.603 1.936-.603 2.754 0 .584.43 1.336.562 2.031.357.697-.204 1.258-.722 1.518-1.399.363-.949 1.301-1.553 2.316-1.489.724.046 1.427-.249 1.902-.798.475-.548.667-1.286.519-1.996-.207-.995.256-2.01 1.145-2.505.633-.354 1.065-.982 1.169-1.7s-.135-1.443-.643-1.96zm-12.584 5.43l-4.5-4.364 1.857-1.857 2.643 2.506 5.643-5.784 1.857 1.857-7.5 7.642z"/%3E%3C/svg%3E" alt="Checkmark">
    <h2>Awesome!</h2>
    <p>Thank you! Your message has been sent.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php
  } elseif ($_GET['status'] == "error") {
?>
  <div id="errorModal" class="modal">
  <div class="modal-content">
    <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMTAwIiBoZWlnaHQ9IjEwMCIgdmlld0JveD0iMCAwIDQ4IDQ4Ij4KPHBhdGggZmlsbD0iI2Y0NDMzNiIgZD0iTTQ0LDI0YzAsMTEuMDQ1LTguOTU1LDIwLTIwLDIwUzQsMzUuMDQ1LDQsMjRTMTIuOTU1LDQsMjQsNFM0NCwxMi45NTUsNDQsMjR6Ij48L3BhdGg+PHBhdGggZmlsbD0iI2ZmZiIgZD0iTTI5LjY1NiwxNS41MTZsMi44MjgsMi44MjhsLTE0LjE0LDE0LjE0bC0yLjgyOC0yLjgyOEwyOS42NTYsMTUuNTE2eiI+PC9wYXRoPjxwYXRoIGZpbGw9IiNmZmYiIGQ9Ik0zMi40ODQsMjkuNjU2bC0yLjgyOCwyLjgyOGwtMTQuMTQtMTQuMTRsMi44MjgtMi44MjhMMzIuNDg0LDI5LjY1NnoiPjwvcGF0aD4KPC9zdmc+" alt="Checkmark">
    <h2>Opps!</h2>
    <p>Sorry, there was an error sending your message.</p>
    <button id="closeModal">Got it</button>
  </div>
</div>

<?php  }
  }
?>
