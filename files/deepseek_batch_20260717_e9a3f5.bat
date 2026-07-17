@echo off
title x
setlocal enabledelayedexpansion

set count=1

:loop
echo !count!
set /a count+=1
timeout /t 1 /nobreak >nul
goto loop