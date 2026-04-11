@echo off
setlocal
:: Add Laragon PHP to path automatically just in case
set PATH=C:\laragon\bin\php\php-8.4.12-nts-Win32-vs17-x64;%PATH%
title LS_OMR Manager

:menu
cls
echo ========================================
echo     LS_OMR Laravel App Manager
echo ========================================
echo Admin Login: hello@example.com (Pass: password)
echo ========================================
echo 1. Start Project (Artisan Serve + Vite)
echo 2. Stop Project
echo 3. Restart Project
echo 4. Clear Cache (optimize:clear)
echo 5. Run Database Migrations
echo 0. Exit
echo ========================================
set /p choice="Enter your choice (0-5): "

if "%choice%"=="1" goto start
if "%choice%"=="2" goto stop
if "%choice%"=="3" goto restart
if "%choice%"=="4" goto clear
if "%choice%"=="5" goto migrate
if "%choice%"=="0" goto exit
goto menu

:start
echo Starting Laravel Server...
start "LaravelServer" cmd /c "php artisan serve"
echo Starting Vite/NPM...
start "ViteServer" cmd /c "npm run dev"
echo Servers are running in separate windows.
pause
goto menu

:stop
echo Stopping PHP and Node instances...
taskkill /FI "WINDOWTITLE eq LaravelServer*" /T /F >nul 2>&1
taskkill /IM php.exe /F >nul 2>&1
taskkill /FI "WINDOWTITLE eq ViteServer*" /T /F >nul 2>&1
taskkill /IM node.exe /F >nul 2>&1
echo Project stopped!
pause
goto menu

:restart
echo Stopping services...
taskkill /FI "WINDOWTITLE eq LaravelServer*" /T /F >nul 2>&1
taskkill /IM php.exe /F >nul 2>&1
taskkill /FI "WINDOWTITLE eq ViteServer*" /T /F >nul 2>&1
taskkill /IM node.exe /F >nul 2>&1
echo Starting services...
start "LaravelServer" cmd /c "php artisan serve"
start "ViteServer" cmd /c "npm run dev"
echo Project restarted!
pause
goto menu

:clear
echo Clearing application cache...
php artisan optimize:clear
pause
goto menu

:migrate
echo Running database migrations...
php artisan migrate
pause
goto menu

:exit
exit
