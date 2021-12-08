<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form card border-light">
                    <div class="form__title">
                        Registro de nueva empresa
                    </div>

                    <div class="form__subTitle">
                        Llena el formulario y nosotros nos pondremos en contacto con tigo
                    </div>

                    <form>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="nameEnterprise" placeholder="name@example.com">
                            <label for="nameEnterprise">Nombre de la Empresa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="businessTurn" placeholder="Password">
                            <label for="businessTurn">Actividad o giro del negocio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="name" placeholder="name@example.com">
                            <label for="name">Nombre del Solicitante</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="floatinPassword" placeholder="Password">
                            <label for="floatinPassword">Domicilio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatinInput" placeholder="name@example.com">
                            <label for="floatinInput">Telefono</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control" id="floatinPassword" placeholder="Password">
                            <label for="floatinPassword">Correo</label>
                        </div>

                        <div class="form__content--btn">
                            <button class="btn btn-primary" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style scoped>

.form{
    padding: 1rem 2rem 0;
}

.form__title{
    width: 100%;
    text-align: center;
    margin: 0 0 .5rem;
    font-size: 1.5rem;
    font-weight: bold;
}

.form__subTitle{
    width: 100%;
    text-align: center;
    font-weight: bold;
    margin-bottom: 2rem;
}

.form__content--btn{
    margin: 1rem .5rem;
    display: flex;
    justify-content: center;
}

</style>
