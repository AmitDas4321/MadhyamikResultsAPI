const axios = require('axios');

const params = {
  roll_no: '601382N0010',
  dob: '2008-08-14'
};

axios.get('https://api.linkpc.net/WBBSE/Madhyamik-Results/', { params })
  .then(response => {
    console.log(response.data);
  })
  .catch(error => {
    console.error('Error:', error.message);
  });
