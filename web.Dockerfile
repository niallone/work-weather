FROM node:19

EXPOSE 3000

WORKDIR /app
COPY web /app

RUN yarn install
CMD ["npm", "start"]
