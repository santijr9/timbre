#!/bin/bash
#export XDG_RUNTIME_DIR="/run/user/1000"
#export XAUTHORITY="/run/user/1000/gdm/Xauthority"
#export DISPLAY=":0"


#echo "hola" >> /tmp/hola.txt
#echo $XAUTHORITY >> /tmp/hola.txt
#echo $DISPLAY >> /tmp/hola.txt

#ffplay necesita entorno grafico.
#ffplay "$1" -t 8 2> /tmp/error.log&

#omxplayer da un error de tanto en tanto y se queda un proceso defunct. Solo se puede solucionar con un reboot.
#omxplayer $1 &


segundos=$(cat /var/www/html/tiempo)

play /var/www/html/selected/selected.mp3 trim 0 $segundos


#sleep $segundos
#ps=$(ps aux | grep omxplayer)
#pid=$(echo $ps | cut -f 2 -d " ")
#echo $ps pid $pid
#pkill omxplayer

exit $?
