import config from './config.js';

const finalUrl = "https://www.inegi.org.mx/app/api/indicadores/desarrolladores/jsonxml/INDICATOR/1002000002/es/0700/true/BISE/2.0/ae382ea7-08af-442b-9a69-7a279dc05949?type=json"

async function getData(url) {
    const response = await fetch(url, {
        method: 'GET',
        headers: {
            "Content-Type": "application/json",
            'Host': 'www.inegi.org.mx',
            'User-Agent': 'useragentvalue',
            'Transfer-Encoding':'chunked',
        },
    });
    const data = await response.json();
    return data;
}

getData(finalUrl).then(data => {
    console.log(data);
});

