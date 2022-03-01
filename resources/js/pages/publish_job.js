function getElements() {
    const zipcode = document.getElementsByName('zipcode')[0];
    const state = document.getElementsByName('state')[0];
    const city = document.getElementsByName('city')[0];
    const city_state = document.getElementsByName('city_state')[0];

    return {
        zipcode,
        state,
        city,
        city_state,
    }
}

function createInteractions (elements) {
    const {
        zipcode,
        state,
        city,
        city_state,
    } = elements;
    let typingTimer;
    const doneTypingInterval = 1000;

    function getAddressByZipcode (event) {
        const inputValue = event.target.value;
        const apiUrl = `https://brasilapi.com.br/api/cep/v2/${inputValue}`

        return async function () {
            const zipcodeErrorMessage = document.getElementById('zipcode_error_message');
            const formButton = document.getElementById('form_button');
            formButton.disabled = true

            try {
                const response = await fetch(apiUrl);
                const data = await response.json();

                if(data.errors) {
                    zipcodeErrorMessage.innerText = 'CEP inválido';

                    return
                }

                zipcodeErrorMessage.innerText = '';
                city_state.value = `${data.city}, ${data.state}`;
                state.value = data.state;
                city.value = data.city;

                formButton.disabled = false
            } catch (error) {
                zipcodeErrorMessage.innerText = 'CEP inválido';
            }
        }
    }

    zipcode.addEventListener('paste', () => {
        clearTimeout(typingTimer);
        typingTimer = setTimeout(getAddressByZipcode(event), doneTypingInterval);
    });

    zipcode.addEventListener('keyup', () => {
        console.log('keyup')
        clearTimeout(typingTimer);
        typingTimer = setTimeout(getAddressByZipcode(event), doneTypingInterval);
    });

    zipcode.addEventListener('onfocusout', () => {
        console.log('onfocusout')
        clearTimeout(typingTimer);
        typingTimer = setTimeout(getAddressByZipcode(event), doneTypingInterval);
    });
}

export default function init() {
    const elements = getElements();

    createInteractions(elements);
}
