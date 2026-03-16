FROM ubuntu:20.04

ENV DEBIAN_FRONTEND=noninteractive

RUN apt update && apt install -y \
apache2 \
php \
ssh \
nano

RUN mkdir /var/run/sshd \
&& useradd -m fileuser \
&& echo "fileuser:tinker" | chpasswd
RUN rm /var/www/html/index.html
RUN chmod u+s /usr/bin/find

COPY rutas/ /var/www/html/

EXPOSE 80 22

CMD service apache2 start && service ssh start && tail -f /dev/null
