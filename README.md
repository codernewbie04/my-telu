<h2 align="center">Un-Official My Tel-U API Wrapper</h2>
IDK if this is legal or not, but keep quiet from Tel-U officers XD

| Method  | Result  | OVO Version
|---|---| --- |
| `Login`  | OK | 1.0.0(23 Feb 23)
| `Profile`  | OK | 1.0.0(23 Feb 23)
| `Schedule`  | OK | 1.0.0(23 Feb 23)
| `Grades`  | OK | 1.0.0(23 Feb 23)
| `scanQR`  | OK | 1.0.0(23 Feb 23)


## Other Lib
### Python
- Coming Soon

### Javascript / nodejs
- Coming Soon

## Install
`composer require codernewbie04/my-telu:dev-main`


## Login
```php
require 'vendor/autoload.php';
use Codernewbie04\MyTelu\MyTelu;

$mytelu = new MyTelu()->login("username", "password");
//get Resposne 
$res = $mytelu->getResponse();
if($res->getStatus()){
  //If logged in
} else {
  //invalid auth
}
```
### Json Response Success
```JSON
{
 "token": "JWT_TOKEN_HERE",
 "expired": "123456",
}
```

### Json Response Failed
```JSON
{
  "status":"Failed",
  "message": "Wrong password, cannot proceed any further"
}
```


## Profile
```php
require 'vendor/autoload.php';
use Codernewbie04\MyTelu\MyTelu;
//get JWT_TOKEN from login
$mytelu = new MyTelu("JWT_TOKEN")->profile();
//get Resposne 
$res = $mytelu->getResponse();
if($res->getStatus()){
  //If auth token correct
} else {
  //invalid auth
}
```
### Json Response Success
```JSON
{
    "numberid": "130120xxxx",
    "fullname": "xxxxxx",
    "studyprogramid": "xx",
    "studyprogram": "xxxxxxx",
    "facultyid": "x",
    "faculty": "xxxxxxxxx",
    "schoolyear": "xxxx",
    "photo": "https://images.telkomuniversity.ac.id/pmb/2021/PAS_FOTO/xxxxxxxx.jpg",
    "phone": "082xxxxxxxx",
    "emergencyphone": null,
    "studentclass": "IF-xx-xx",
    "lecturerguardian": "xxxxx xxxxxx xxxxxx",
    "address": "xxxxxxx",
    "zipcode": "xxxxx",
    "idcardnumber": "xxxxxxxxxxxxxx",
    "user": "xxxxxxxxx",
    "email": "xxxxxxx@student.telkomuniversity.ac.id"
}
```

### Json Response Failed
```JSON
{
    "status": "Unauthorized",
    "message": "Invalid/Expired Token, Please Login First..."
}
```



## Schedule
```php
require 'vendor/autoload.php';
use Codernewbie04\MyTelu\MyTelu;

$mytelu = new MyTelu()->schedule("Student ID / NIM");
//get Resposne 
$res = $mytelu->getResponse();
if($res->getStatus()){
  //Success get schedule
} else {
  //Failed get schedule
}
```
### Json Response Success
```JSON
[
    {
        "DAY": "SELASA",
        "COURSEID": 1219632,
        "SUBJECT": "XXXXX - XXXXXXXX",
        "LECTURERCODE": "XXX",
        "CLASS": "XX-XX-XX-XX",
        "ROOMNAME": "XXXXXX",
        "STARTHOUR": "XX:XX:XX",
        "ENDHOUR": "XX:XX:XX",
        "SCHEDULESTATUS": "XXXXXX",
        "RNUM": 0,
        "TOTALROWS": 0
    }
]
```

### Json Response Failed
```JSON
{
    "message": "Data tidak ditemukan"
}
```




## Grades
```php
require 'vendor/autoload.php';
use Codernewbie04\MyTelu\MyTelu;
// periode Tahun ajaran 2020/2021
// semester 1 : Ganjil / 2 : Genap
// subjectid : course ID, bisa didapatkan lewat jadwal / LMS / Igracias
//example new MyTelu()->grades("130120xxxx", 2021, 1, 25809)
$mytelu = new MyTelu()->grades("Student ID / NIM", "periode", "semester", "subjectid");
//get Resposne 
$res = $mytelu->getResponse();
//action with ur response
```
### Json Response Success
```JSON
{
    "COMPONENT": [
        {
            "COMPONENTNAME": "ASSESSMENT TOOL CLO 1",
            "SCORE": 100,
            "PERCENTAGE": 25
        },
        {
            "COMPONENTNAME": "ASSESSMENT TOOL CLO 2",
            "SCORE": 84,
            "PERCENTAGE": 35
        },
        {
            "COMPONENTNAME": "ASSESSMENT TOOL CLO 3",
            "SCORE": 88,
            "PERCENTAGE": 40
        }
    ],
    "AVG": "89.60"
}
```

### Json Response Failed
```JSON
{
    "COMPONENT": [],
    "AVG": "0.00"
}
```







## scanQR
```php
require 'vendor/autoload.php';
use Codernewbie04\MyTelu\MyTelu;
$mytelu = new MyTelu()->scanQR("Student ID / NIM", "QR CODE IN STRING");
//get Resposne 
$res = $mytelu->getResponse();
if($res->getStatus()){
  //If success scan qr code with ur nim
} else {
  //Failed
}
```
### Json Response Success
```JSON
{
    "success": "true",
    "message": "QRCode berhasil di submit"
}
```

### Json Response Failed
```JSON
{
    "success": "false",
    "message": "QRCode sudah expired"
}
```


### Note
Username and Password only use for login
JWT Token only use for get profile My Tel-U Account




