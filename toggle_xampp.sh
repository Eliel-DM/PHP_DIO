#!/bin/bash

# Caminho base do XAMPP
XAMPP_PATH="/opt/lampp"

# Verifica se o Apache (parte do XAMPP) está rodando
if pgrep -f httpd > /dev/null; then
    echo "[XAMPP] Servidor está rodando. Parando..."
    sudo $XAMPP_PATH/lampp stop
else
    echo "[XAMPP] Servidor está parado. Iniciando..."
    sudo $XAMPP_PATH/lampp start
fi
