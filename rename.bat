@echo off&setlocal enabledelayedexpansion
echo,&set/p x=Step1. filename
echo,&set/p sign=Step2. str
echo,&set/p change=Step3. ch
echo,&echo,process
for %%i in (*.%x%) do (
set "filename=%%i"
if defined sign set "filename=!filename:%sign%=!"
if defined change set "filename=!filename:%change:~,1%=%change:~-1%!"
if not "%%i"=="!filename!" ren "%%i" "!filename!"
)
echo,ok
pause>nul