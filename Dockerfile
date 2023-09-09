FROM node:16 as builder

WORKDIR /app

COPY . .

RUN yarn install \
  --prefer-offline \
  --frozen-lockfile \
  --non-interactive \
  --production=false \
&& yarn generate \
&& rm -rf node_modules

RUN yarn generate

FROM nginx:alpine

COPY --from=builder /app/dist /usr/share/nginx/html

COPY /default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
