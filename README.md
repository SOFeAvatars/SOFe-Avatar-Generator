# SOFe-Avatar-Generator
Online SOFe Avatar Generator:

## How to use:

### Easy way (recommended):
Go to http://himbeer.me/sofeavatars and let your creativity free!

### Use the "API":
Our Generator has an API with different arguments:

#### Usage:
Use them like this http://himbeer.me/sofeavatars?r=123&g=123&b=123


![An Example Image](http://himbeer.me/sofeavatars/sofeavatar.php?r=123&g=123&b=123)


#### Argument list:

##### Foreground (the avatar itself):
* hex → Hexadecimal color value, this will override the r, g, and b arguments.
* r → The RGB value of red.
* g → The RGB value of green.
* b → The RGB value of blue.

##### Background (optional):
* bghex → Hexadecimal color value, this will override the bgr, bgg, and bgb arguments.
* bgr → The RGB value of red.
* bgg → The RGB value of green.
* bgb → The RGB value of blue.

##### others (optional):
* rot → The rotation of the image
* download → setting the paramater to 1 will attempt to make the browser download the image using doDownload paramater with no flags do the same

### Install it on your webserver:
1. Clone the repo to your webserver.
2. Have fun.

## Info:
This project is using http://jscolor.com for the color-changer.
