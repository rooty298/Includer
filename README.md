# Includer
Laboratorio LFI con Docker

## Clonar el repositorio, construir y ejecutar
```bash
git clone https://github.com/rooty298/Includer.git
cd Includer
docker build -t includer .
docker run -p 8080:80 -p 2222:22 includer
