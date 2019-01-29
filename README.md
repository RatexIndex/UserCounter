# UserCounter
Simple Usercounter with timed session

Demo: https://ratexindex.de

Setup Guide

1. Copy and paste counter.php & count_file.txt in your www folder.
2. Open the index.php and copy the code to this place were you want the counter.
3. User Session is setup to 3h if you wanna edit the time session open up counter.php
and edit Line: session_set_cookie_params(10800);  make sure you use seconds 10800 = 3 Hours.

4. If you need to reset the Counter open the count_file.txt and set it to 1 again!
