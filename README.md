# NATAS   😊😊

# Natas teaches the basics of serverside web-security.

Each level of natas consists of its own **BOX** located at **http://natasX.natas.labs.overthewire.org** where X is the level number. There is no SSH login.

**To access a level, enter the username for that level (e.g. natas0 for level 0) and its password.**

Each level has access to the password of the next level. Your job is to somehow obtain that next password and level up.

# Start here:

Username: natas0\
Password: natas0\
URL:      http://natas0.natas.labs.overthewire.org

# LEVEL 0

Once we are logged in, the level hint will appear in the middle of the screen ie, it is showing that **you can find the password for the next level on this page** Thats it..Nothing else. And you have to find the password for entering into the next level. After searching the web page thoroughly I have gone to the view page source ... then I got the password showing that the password for the next level is ****@@##%$$%^&&**(&^%%$ like this.......

**What u want....password** try it and get it....😂🤣



# LEVEL 0 ➠ LEVEL 1


Once we are logged in, the level hint will appear in the middle of the screen ie, it is showing that **You can find the password for the next level on this page, but rightclicking has been blocked!** 
Thats it ...Nothing else . You have to go to the view command on thw window of the web page there it will show a developer option , there u will get view source click on it..it will open the source code of that page and finally u will get the password -- **@#$%^&*((&^%$#** that will help you to get enter into the next level...

PASSWORD :  **nahhhhhahahaa**😂🤣😂


# LEVEL 1 ➠ LEVEL 2

Once ur logged in, the level hint will appear in the middle of the server ie, **There is nothing on the webpage** . After viewing the source page of that level it is showing that it is containing a png file. To open that I have add /files after the main urls which ur working on it. After viewing that site a new page appears that is **Index of /files** it contains two file ... one is the **pixel.png** file and other is the **user.txt** file. 
After opening the user.txt file it is showing the password for the next level....

PASSWORD : **@#$%^&*(&^%%$**


# LEVEL 2 ➠ LEVEL 3

Once ur logged in, the level hint will appear in the middle of the server ie, **There is nothing on the webpage** Again...in this level the same hint is showing .
**“Not even Google will find it this time…”** is our hint here. If you have some idea of HTML, and about web servers, then you would know that the files it’s referring too is **robots.txt**. When u go to that url using **robots.txt** at last it will display 
User-agent: *\
Disallow: /s3cr3t/\
Then, so the robots.txt is disallowing crawlers to find /s3cr3t/. Let’s go ahead and add it to the end of the webpage, which should look something like this: http://natas3.natas.labs.overthewire.org/s3cr3t/. 
After clicking on the above link it will open a page named **Index of /s3cr3t/** and it is showing a file named **user.txt**.
After opening this file it will show the password of the next level.

PASSWORD : **@#$%^&*()(*&^%**

# LEVEL 3 ➠ LEVEL 4

Once ur logged in, the level hint will appear in the middle of the server ie, **Access disallowed. You are visiting from "http://natas4.natas.labs.overthewire.org/" while authorized users should come only from "http://natas5.natas.labs.overthewire.org/"** ..
So after seeing that I have searched in google, it shows that we have to change the HTTP Referer to natas5 using a web security tools . Then only we can get access to the page where the password id stored.
But Using the inspect element , u can go to network settings and add a Referer and edit it to natas5 and send it.
Then it will not refresh the page automatically, you have to go to reference setting and then it will show the page with index.php page wuth natas5 and what u can see is that the password is here....

PASSWORD : **@#$$%%^^&**


# LEVEL 4 ➠ LEVEL 5

Once ur logged in, the level hint will appear in the middle of the server ie, **Access disallowed .You are not logged in.**
So after seeing that I reached to the view page source there I find nothing ..Just It is showing the same thing .. No file , no hidden file , nothing..
Then I have gone to inspect Element, theere I have seen in the Header section that there is one cookies and it is showing that **loggedin=0** And when I Edited this cookies to **loggedin=1** and then i send it and after that I checked in the response section there the page is loaded and the password for the next level is displayed..

PASSWORD : **@#$$#$%^&**


# LEVEL 5 ➠ LEVEL 6

Once ur logged in, the level hint will appear in the middle of the server ie, **Input secret** And There it is showing view page source.
After clicking the page source it is showing a php file and It seems that the PHP is including a link to a file stored on the webpage **/includes/secret.inc**.
Then I go to that webpae who include that secret.inc there I found a secret key , after pasting it and after submitting it the password for the next level is displayed...

PASSWORD : **@#$%^&&^**


# LEVEL 6 ➠ LEVEL 7

Once ur logged in, the level hint will appear in the middle of the server ie, **only two thing one is Home and other is About**.
After viewing the source page of that page it is displaying extra thing ie, a type of hint **hint: password for webuser natas8 is in /etc/natas_webpass/natas8**.
After clicking on the home link then it is showing a another web apge in which it is showing same Home and About link and other than that it is displaying that it is **the front page**.
Then I try that to edit the URL of the home page ie **http://natas7.natas.labs.overthewire.org/index.php?page=home**
And I have edited the urls remove the home and paste this hint **/etc/natas_webpass/natas8** after page and searched it. Then I have find the password for the next Level...

PASSWORD : **@#$%^&&^%**


# LEVEL 7 ➠ LEVEL 8

Once ur logged in, the level hint will appear in the middle of the server ie, **Input Secret** thats it..
After Viewing the Source code which is displayed in the webpage, It seems that the secret code we need is encoded. Looking though the PHP code we can see that the “secret” entered is converted from bin to hex, reversed, and then base64 encoded.
So for us to get the “secret” we have to reverse engineer this. 

So I have gone in online php editor and use this command :
**echo base64_decode(strrev(hex2bin('3d3d516343746d4d6d6c315669563362')));**
Then, We can get the secret key from the encoded key by base64 decoding it, reversing the string, and converting the hex back to binary.
If you have done correctly, you should get the secret key **@#$%^&^**. Let’s enter that and see if it works.
Then You should find the password for the next Level....

PASSWORD : **@#$%^&^%**

# LEVEL 8 ➠ LEVEL 9

Once ur logged in, the level hint appear in the middle of the sever ie, **Find words containing** .
For this level, it seems that the query is looking for words containing our input. Let’s view the sourcecode , It is showing that Source code We can find a PHP file , it is telling that From the way “key” is being used in the PHP script, we can probably insert arbitrary code.

**Lets understand it more Deeply...😁😁**

If we type in the word “password” then the **passthru** command in the **PHP** script will look like so: **grep -i password dictionary.txt**. Seeing the way that key is **encapsulated(too much of English)** 😂 in quotes, and there is no input filtering, we can assume that we are able to enter special characters.
After that We can use the **;** command separator, which will allow us to use 2 commands in one line. And we will also use the **#** comment command, which will comment out the rest of the text following the symbol.

So, in the input field we will type **; cat /etc/natas_webpass/natas10 #** which in turn will run the **passthru** command as such; **grep -i ; cat /etc/natas_webpass/natas10 #**, commenting out and removing dictionary.txt.
After enterning this command U will get the password for the next level.
**What ELSE YOU WANT....**

PASSWORD : **@#$%^&^%$**


# LEVEL 9 ➠ LEVEL 10

Once ur logged in, the level hint appear in the middle of the sever ie, **For security reasons, we now filter on certain characters** And we have to find the words containing our input.
**This level is similar to the previous level**, so let’s view the sourcecode and see what we can find in the PHP script.
Okay, so the script seems to be the same as level 9’s, but now they are filtering the **;** and **&** command.
Seems they still haven’t fixed the way “key” is storing input. So we can exploit this the same way we did in 9; but this time just using regular expressions.

Let’s go ahead and enter **.* /etc/natas_webpass/natas11 #** inside the query. By entering **.***, we tell grep to search for all, while ignoring case, and match it to **etc/natas_webpass/natas11**. The **#** command, comments out dictionary.txt, preventing any errors from occurring.
After entering this command U will get the password for the next level.

**And password is here**

PASSWORD : **@#$%^&&^**


# LEVEL 10 ➠ LEVEL 11 (**BEWARE....TOO BIG APPROACH😆😆😆** )

Once ur logged in, the level hint appear in the middle of the server ie, **Cookies are protected with XOR encryption**.
So it seems like the cookies are protected with a **XOR Encryption**… interesting! Let’s go ahead and grab the XOR Encrypted cookie that the site is using. 
So Go to the inspect Element and there go to the network window and refresh the page and then U can get the cookies which is stored under header.

In this case, it would be: **Original_Data XOR KEY = Encrypted_Data**.

Thus to get the Key we do the following: **Original_Data XOR Encrypted_Data = KEY**, since we already are provided with the Original_Data and Encrypted_Data. 
Let’s fire up PHP and write the following script to **reverse engineer** the key and I uploaded the script in the NATAS repository Under **Level11.PHP file.(CHECK IT)**.

And we will get the Key Output of **@##$$#@@#(KEY🔐 which is in repeated form)**. Okay, great. So let’s go back and edit our code which I have uploaded Under NATAS Repository , and replace the **$key** with our newly found key, and also edit the showpassword to **yes**.
Once we run the new PHP script we should get an output of our cookie:**@#$%^&^%^&**

With this new cookie, let’s go back to Header section and edit the cookies ine with the new cookies which we have get and submit it to the page. If done correctly, we should get the password.....😂

PASSWORD : **@#$%^&&^%**


# LEVEL 11 ➠ LEVEL 12

Once ur logged in, the level hint appear in the middle of the server ie, **Choose a JPEG to upload (max 1KB)** that means we have to upload a JPEG file which have to be of size not more than **1KB**.
Let’s see what the source code does before we decide on how to exploit this.

It seems as if the code is taking the uploaded file, creating a random name and path, and adding a preset extension  which we can assume is **.jpeg**.
The first thing that I can think of, off the top of my head is an **Unrestricted File Upload**. So let’s go ahead and test for this **vulnerability**. We can begin by creating a simple **PHP Shell** that will echo back the contents of **/etc/natas_webpass/natas13**.


So first run the **HTML** file which I have taken from the source code of the main page of **NATAS 12** and run on my Web browser. After that, I have to upload the file which I have written in PHP ie, cat natas 13.
You should see something along the lines of **“The file upload/yh33kxvyt8.php has been uploaded”** come up.
Anf after clicking the above link , password of the next level will displayed...

**Note(I have uploaded the PHP file and HTML file that is used in this level for reference )**

PASSWORD : **@#$%^&^%$#**


# LEVEL 12 ➠ LEVEL 13

Once ur logged in, the level hint appear in the middle of the server ie, **Choose a  JPEG to Upload (max 1KB){For Security reasons, We now only accept image file!!!!}

This level seems to be the same as 12. The only catch is that the upload accepts image files only. Let’s see source code.
The source code is similar to 12, but it has some extra addition to it. If you look closely to the IF/ELSE statements, we can see that exif_imagetype is being used.














