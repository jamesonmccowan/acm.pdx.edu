<?php
  $title = "ACM @ PSU - Contact Us";

// put stuff in here to get added to this specific page's head section
function head_content()
{
/*?>
  <style type="text/css">
  </style>

  <script type="text/javascript">
  </script>
<?php*/
}

// put stuff in here to get it displayed on the page
function main_content()
{
?>
    <h2>Contact Us</h2>

    <p>IRC: #acm on irc.cat.pdx.edu</p>
    <script type="text/javascript"><!--
message = new Array("01000101","01101101","01100001","01101001","01101100","00111010","00100000","01110000","01110011","01110101","01100001","01100011","01101101","00100000","01100001","01110100","00100000","01100011","01100101","01100011","01110011","00101110","01110000","01100100","01111000","00101110","01100101","01100100","01110101","00100000");

for(i=0;i<message.length;i++)
  document.write(String.fromCharCode(parseInt(message[i], 2)));
    --></script>
<?php
}
  include 'scripts/body.php';
?>