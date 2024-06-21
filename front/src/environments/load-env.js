// src/environments/load-env.js
const fs = require('fs');
const dotenv = require('dotenv');
const envConfig = dotenv.parse(fs.readFileSync('.env'));

const targetPath = './src/environments/environment.ts';

const envVariables = {
  production: false,
  apiUrl: envConfig.API_URL + '/api',
};
const envFileContent = `export const environment = ${JSON.stringify(envVariables, null, 2)};`;

fs.writeFileSync(targetPath, envFileContent);
console.log('The file `environment.ts` will be written with the following content');
