FROM node:10
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm install ejs
RUN npm install http-server -g
RUN npm run-script build
EXPOSE 8080
CMD ["http-server"]