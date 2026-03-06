@echo off
echo Starting XAMPP services...
echo.

echo Starting Apache...
start "XAMPP Apache" /D "c:\xampp\xampp-control" xampp-control.exe -apache

echo Starting MySQL...
start "XAMPP MySQL" /D "c:\xampp\xampp-control" xampp-control.exe -mysql

echo.
echo Please wait a few seconds, then:
echo 1. Click XAMPP Control Panel in the new window
echo 2. Click START button next to Apache
echo 3. Click START button next to MySQL
echo.
echo After MySQL shows "Running" in green, open: http://localhost:8765/
pause

