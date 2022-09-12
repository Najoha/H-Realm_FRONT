const axios = require('axios');

axios.get('http://localhost:3000/user/').then(resp => {
    console.log(resp.data);
});