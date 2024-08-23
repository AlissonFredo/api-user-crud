#!/bin/bash

# Script para Configuração de um Novo Projeto PHP no Apache

# Este script automatiza a configuração de um novo projeto PHP em um servidor Apache.
# Ele cria um novo diretório para o projeto, ajusta as permissões de usuário e grupo,
# cria um arquivo de configuração do VirtualHost, adiciona uma entrada no arquivo `/etc/hosts`
# para resolver o nome de domínio local, e recarrega o serviço Apache para aplicar as mudanças.

# Definição de Variáveis:
NOME_NOVO_PROJETO="api-user-crud"  # Nome do novo projeto
CAMINHO_SERVIDOR="/var/www/"  # Caminho base onde o projeto será criado
NOVO_PROJETO="$CAMINHO_SERVIDOR$NOME_NOVO_PROJETO"  # Caminho completo para o novo projeto
CAMINHO_PUBLICO_SERVIDOR="$NOVO_PROJETO/public"  # Caminho para o diretório `public` do novo projeto

# Permissões de Execução:
chmod +x ./main.sh

# Obtenção do Usuário e Grupo Atual:
USUARIO_ATUAL=$(whoami)
GRUPO_ATUAL=$(whoami)

# Ajuste de Permissões:
sudo chown $USUARIO_ATUAL:$GRUPO_ATUAL "$NOVO_PROJETO"

# Criação do Arquivo de Configuração do VirtualHost:
sudo bash -c "cat <<EOF > /etc/apache2/sites-available/$NOME_NOVO_PROJETO.conf
<VirtualHost *:80>
    ServerName $NOME_NOVO_PROJETO.local.com.br
    ServerAdmin suporte@$NOME_NOVO_PROJETO.com.br
    DocumentRoot $CAMINHO_PUBLICO_SERVIDOR

    <Directory $CAMINHO_PUBLICO_SERVIDOR>
        AllowOverride All
        Require all granted
    </Directory>

    ErrorLog \${APACHE_LOG_DIR}/error.log
    CustomLog \${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
EOF"

# Habilitação do Site no Apache:
sudo a2ensite "$NOME_NOVO_PROJETO.conf"  # Habilita o novo site configurado no Apache

# Atualização do Arquivo `/etc/hosts`:
sudo bash -c "echo '127.0.0.1 $NOME_NOVO_PROJETO.local.com.br' >> /etc/hosts"

# Recarregamento do Serviço Apache:
sudo systemctl reload apache2

# Abertura do Navegador:
xdg-open "http://$NOME_NOVO_PROJETO.local.com.br"

# Fim do Script
