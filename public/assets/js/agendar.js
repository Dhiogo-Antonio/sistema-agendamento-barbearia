const form = document.getElementById("bookingForm");

const serviceInputs = document.querySelectorAll(
    'input[name="servico_id"]'
);

const barberInputs = document.querySelectorAll(
    'input[name="barbeiro_id"]'
);

const dateInput = document.getElementById("data");
const timeSelect = document.getElementById("hora");

const summaryService = document.getElementById("summaryService");
const summaryBarber = document.getElementById("summaryBarber");
const summaryDate = document.getElementById("summaryDate");
const summaryTime = document.getElementById("summaryTime");
const summaryPrice = document.getElementById("summaryPrice");

const availabilityMessage =
    document.getElementById("availabilityMessage");



serviceInputs.forEach((input) => {

    input.addEventListener("change", () => {

        const serviceCard =
            input.closest(".service-option");

        const serviceName =
            serviceCard.querySelector("h3").textContent.trim();

        const price =
            Number(input.dataset.price);

        summaryService.textContent = serviceName;

        summaryPrice.textContent =
            price.toLocaleString("pt-BR", {
                style: "currency",
                currency: "BRL"
            });

    });

});



barberInputs.forEach((input) => {

    input.addEventListener("change", () => {

        const barberCard =
            input.closest(".barber-option");

        const barberName =
            barberCard.querySelector("h3").textContent.trim();

        summaryBarber.textContent = barberName;

        atualizarHorarios();

    });

});



dateInput.addEventListener("change", () => {

    const date = new Date(
        dateInput.value + "T00:00:00"
    );

    if (!isNaN(date)) {

        summaryDate.textContent =
            date.toLocaleDateString("pt-BR");

    }

    atualizarHorarios();

});



function atualizarHorarios() {

    const barbeiro =
        document.querySelector(
            'input[name="barbeiro_id"]:checked'
        );

    const data =
        dateInput.value;


    timeSelect.innerHTML = "";


    if (!barbeiro || !data) {

        const option =
            document.createElement("option");

        option.value = "";

        option.textContent =
            "Selecione barbeiro e data";

        timeSelect.appendChild(option);

        return;
    }


    const horarios = [
        "09:00",
        "09:30",
        "10:00",
        "10:30",
        "11:00",
        "11:30",
        "13:00",
        "13:30",
        "14:00",
        "14:30",
        "15:00",
        "15:30",
        "16:00",
        "16:30",
        "17:00",
        "17:30",
        "18:00"
    ];


    const primeiraOpcao =
        document.createElement("option");

    primeiraOpcao.value = "";

    primeiraOpcao.textContent =
        "Selecione um horário";

    timeSelect.appendChild(primeiraOpcao);


    horarios.forEach((horario) => {

        const option =
            document.createElement("option");

        option.value = horario;

        option.textContent = horario;

        timeSelect.appendChild(option);

    });


    availabilityMessage.innerHTML = `
        <span class="availability-icon">✓</span>
        <span>
            Horários disponíveis carregados.
        </span>
    `;

}


timeSelect.addEventListener("change", () => {

    summaryTime.textContent =
        timeSelect.value || "Não selecionado";

});



const hoje = new Date();

const ano = hoje.getFullYear();

const mes =
    String(hoje.getMonth() + 1)
        .padStart(2, "0");

const dia =
    String(hoje.getDate())
        .padStart(2, "0");

dateInput.min =
    `${ano}-${mes}-${dia}`;


form.addEventListener("submit", (event) => {

    const service =
        document.querySelector(
            'input[name="servico_id"]:checked'
        );

    const barber =
        document.querySelector(
            'input[name="barbeiro_id"]:checked'
        );


    if (!service || !barber || !dateInput.value || !timeSelect.value) {

        event.preventDefault();

        alert(
            "Preencha serviço, profissional, data e horário."
        );

        return;
    }

});