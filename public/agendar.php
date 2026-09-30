
<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Agendar horário | Barbearia Elite</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:wght@500;600;700&display=swap"
        rel="stylesheet"
    >

    <link rel="stylesheet" href="assets/css/agendar.css">

</head>

<body>



<header class="header">

    <div class="container header-content">

        <a href="index.php" class="logo">

            <span class="logo-mark">
                BE
            </span>

            <span class="logo-text">

                <strong>BARBEARIA</strong>

                <small>ELITE</small>

            </span>

        </a>


        <a href="index.php" class="back-link">

            ← Voltar para o início

        </a>

    </div>

</header>



<main class="booking-page">

    <div class="container">



        <div class="page-heading">

            <span class="section-tag">
                AGENDAMENTO ONLINE
            </span>

            <h1>
                Reserve seu
                <span>horário.</span>
            </h1>

            <p>
                Escolha o serviço, o barbeiro, a data e o horário
                que melhor funcionam para você.
            </p>

        </div>



        <div class="progress">

            <div class="progress-step active">

                <div class="progress-number">
                    1
                </div>

                <span>
                    Serviço
                </span>

            </div>


            <div class="progress-line"></div>


            <div class="progress-step">

                <div class="progress-number">
                    2
                </div>

                <span>
                    Profissional
                </span>

            </div>


            <div class="progress-line"></div>


            <div class="progress-step">

                <div class="progress-number">
                    3
                </div>

                <span>
                    Data e horário
                </span>

            </div>


            <div class="progress-line"></div>


            <div class="progress-step">

                <div class="progress-number">
                    4
                </div>

                <span>
                    Confirmação
                </span>

            </div>

        </div>



        <form
            action="processar-agendamento.php"
            method="POST"
            id="bookingForm"
        >



            <section class="booking-section">

                <div class="section-title">

                    <span>
                        01
                    </span>

                    <div>

                        <h2>
                            Escolha o serviço
                        </h2>

                        <p>
                            Qual serviço você deseja realizar?
                        </p>

                    </div>

                </div>


                <div class="services-selection">


                    <label class="service-option">

                        <input
                            type="radio"
                            name="servico_id"
                            value="1"
                            data-price="35"
                            data-duration="30"
                            required
                        >

                        <div class="service-option-content">

                            <div>

                                <h3>
                                    Corte masculino
                                </h3>

                                <p>
                                    Corte personalizado
                                </p>

                            </div>

                            <div class="service-price">

                                <strong>
                                    R$ 35,00
                                </strong>

                                <span>
                                    30 min
                                </span>

                            </div>

                        </div>

                    </label>



                    <label class="service-option">

                        <input
                            type="radio"
                            name="servico_id"
                            value="2"
                            data-price="25"
                            data-duration="20"
                        >

                        <div class="service-option-content">

                            <div>

                                <h3>
                                    Barba
                                </h3>

                                <p>
                                    Modelagem e acabamento
                                </p>

                            </div>

                            <div class="service-price">

                                <strong>
                                    R$ 25,00
                                </strong>

                                <span>
                                    20 min
                                </span>

                            </div>

                        </div>

                    </label>



                    <label class="service-option featured">

                        <div class="popular">
                            MAIS PEDIDO
                        </div>

                        <input
                            type="radio"
                            name="servico_id"
                            value="3"
                            data-price="55"
                            data-duration="50"
                        >

                        <div class="service-option-content">

                            <div>

                                <h3>
                                    Corte + Barba
                                </h3>

                                <p>
                                    Combo completo
                                </p>

                            </div>

                            <div class="service-price">

                                <strong>
                                    R$ 55,00
                                </strong>

                                <span>
                                    50 min
                                </span>

                            </div>

                        </div>

                    </label>



                    <label class="service-option">

                        <input
                            type="radio"
                            name="servico_id"
                            value="4"
                            data-price="15"
                            data-duration="15"
                        >

                        <div class="service-option-content">

                            <div>

                                <h3>
                                    Sobrancelha
                                </h3>

                                <p>
                                    Design e acabamento
                                </p>

                            </div>

                            <div class="service-price">

                                <strong>
                                    R$ 15,00
                                </strong>

                                <span>
                                    15 min
                                </span>

                            </div>

                        </div>

                    </label>

                </div>

            </section>



            <section class="booking-section">

                <div class="section-title">

                    <span>
                        02
                    </span>

                    <div>

                        <h2>
                            Escolha o profissional
                        </h2>

                        <p>
                            Selecione o barbeiro que deseja.
                        </p>

                    </div>

                </div>


                <div class="barbers-selection">


                    <label class="barber-option">

                        <input
                            type="radio"
                            name="barbeiro_id"
                            value="1"
                            required
                        >

                        <div class="barber-option-content">

                            <div class="barber-avatar">
                                J
                            </div>

                            <div class="barber-data">

                                <h3>
                                    João Silva
                                </h3>

                                <span>
                                    Especialista em cortes
                                </span>

                                <small>
                                    ★ 4.9
                                </small>

                            </div>

                        </div>

                    </label>



                    <label class="barber-option">

                        <input
                            type="radio"
                            name="barbeiro_id"
                            value="2"
                        >

                        <div class="barber-option-content">

                            <div class="barber-avatar">
                                P
                            </div>

                            <div class="barber-data">

                                <h3>
                                    Pedro Santos
                                </h3>

                                <span>
                                    Corte e barba
                                </span>

                                <small>
                                    ★ 4.9
                                </small>

                            </div>

                        </div>

                    </label>



                    <label class="barber-option">

                        <input
                            type="radio"
                            name="barbeiro_id"
                            value="3"
                        >

                        <div class="barber-option-content">

                            <div class="barber-avatar">
                                L
                            </div>

                            <div class="barber-data">

                                <h3>
                                    Lucas Oliveira
                                </h3>

                                <span>
                                    Cortes modernos
                                </span>

                                <small>
                                    ★ 5.0
                                </small>

                            </div>

                        </div>

                    </label>

                </div>

            </section>




            <section class="booking-section">

                <div class="section-title">

                    <span>
                        03
                    </span>

                    <div>

                        <h2>
                            Data e horário
                        </h2>

                        <p>
                            Escolha quando deseja ser atendido.
                        </p>

                    </div>

                </div>


                <div class="date-time-grid">


                    <div class="field">

                        <label for="data">
                            Data
                        </label>

                        <input
                            type="date"
                            name="data"
                            id="data"
                            required
                        >

                    </div>


                    <div class="field">

                        <label for="hora">
                            Horário
                        </label>

                        <select
                            name="hora_inicio"
                            id="hora"
                            required
                        >

                            <option value="">
                                Selecione a data primeiro
                            </option>

                        </select>

                    </div>

                </div>


                <div class="availability-message" id="availabilityMessage">

                    <span class="availability-icon">
                        ✓
                    </span>

                    <span>
                        Selecione um barbeiro e uma data para
                        visualizar os horários disponíveis.
                    </span>

                </div>

            </section>




            <section class="booking-section">

                <div class="section-title">

                    <span>
                        04
                    </span>

                    <div>

                        <h2>
                            Seus dados
                        </h2>

                        <p>
                            Precisamos de alguns dados para confirmar
                            seu agendamento.
                        </p>

                    </div>

                </div>


                <div class="client-grid">


                    <div class="field">

                        <label for="nome">
                            Nome completo
                        </label>

                        <input
                            type="text"
                            name="nome"
                            id="nome"
                            placeholder="Digite seu nome"
                            required
                        >

                    </div>


                    <div class="field">

                        <label for="telefone">
                            Telefone
                        </label>

                        <input
                            type="tel"
                            name="telefone"
                            id="telefone"
                            placeholder="(14) 99999-9999"
                            required
                        >

                    </div>


                    <div class="field full">

                        <label for="email">
                            E-mail
                        </label>

                        <input
                            type="email"
                            name="email"
                            id="email"
                            placeholder="seuemail@email.com"
                        >

                    </div>


                    <div class="field full">

                        <label for="observacoes">
                            Observações
                            <small>(opcional)</small>
                        </label>

                        <textarea
                            name="observacoes"
                            id="observacoes"
                            rows="4"
                            placeholder="Alguma observação sobre seu atendimento?"
                        ></textarea>

                    </div>

                </div>

            </section>



    

            <aside class="booking-summary">

                <div class="summary-header">

                    <span>
                        RESUMO DO AGENDAMENTO
                    </span>

                    <h2>
                        Seu horário
                    </h2>

                </div>


                <div class="summary-content">


                    <div class="summary-row">

                        <span>
                            Serviço
                        </span>

                        <strong id="summaryService">
                            Não selecionado
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Profissional
                        </span>

                        <strong id="summaryBarber">
                            Não selecionado
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Data
                        </span>

                        <strong id="summaryDate">
                            Não selecionada
                        </strong>

                    </div>


                    <div class="summary-row">

                        <span>
                            Horário
                        </span>

                        <strong id="summaryTime">
                            Não selecionado
                        </strong>

                    </div>


                    <div class="summary-divider"></div>


                    <div class="summary-total">

                        <span>
                            Total
                        </span>

                        <strong id="summaryPrice">
                            R$ 0,00
                        </strong>

                    </div>

                </div>

            </aside>



            
            <div class="form-footer">

                <div class="security-info">

                    <span>
                        🔒
                    </span>

                    <p>
                        Seus dados são utilizados apenas para
                        realizar e confirmar seu agendamento.
                    </p>

                </div>


                <button
                    type="submit"
                    class="btn btn-primary"
                >

                    Confirmar agendamento

                    <span>
                        →
                    </span>

                </button>

            </div>

        </form>

    </div>

</main>


<footer class="footer">

    <div class="container">

        <span>
            © 2026 Barbearia Elite
        </span>

        <a href="index.php">
            Voltar para o início
        </a>

    </div>

</footer>


<script src="assets/js/agendar.js"></script>

</body>

</html>