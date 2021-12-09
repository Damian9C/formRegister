<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form card border-light shadow-sm">
                    <div class="form__title">
                        Registro de nueva empresa
                    </div>

                    <div class="form__subTitle">
                        Llena el formulario y nosotros nos pondremos en contacto con tigo
                    </div>

                    <form @submit.prevent="sendNewRegister">
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="nameEnterprise"
                                placeholder="name@example.com"
                                v-model="form.companyName"
                            >
                            <label for="nameEnterprise">Nombre de la Empresa</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="businessTurn"
                                placeholder="Password"
                                v-model="form.businessTurn"
                            >
                            <label for="businessTurn">Actividad o giro del negocio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="name"
                                placeholder="name@example.com"
                                v-model="form.name"
                            >
                            <label for="name">Nombre del Solicitante</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="text"
                                class="form-control"
                                id="address"
                                placeholder="Password"
                                v-model="form.address"
                            >
                            <label for="address">Domicilio</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input
                                type="number"
                                class="form-control"
                                id="phone"
                                placeholder="name@example.com"
                                v-model="form.phone"
                            >
                            <label for="phone">Telefono</label>
                        </div>
                        <div class="form-floating">
                            <input
                                type="email"
                                class="form-control"
                                id="email"
                                placeholder="Password"
                                v-model="form.email"
                            >
                            <label for="email">Correo</label>
                        </div>

                        <div class="form__content--btn">
                            <button class="form__content--btnColor btn" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: () => ({
            form: {
                companyName: '',
                businessTurn: '',
                name: '',
                address: '',
                phone: '',
                email: '',
            }
        }),

        methods: {
            sendNewRegister(){
                try{
                    if(this.form.email !== '' &&
                        this.form.phone !== '' &&
                        this.form.name !== '' &&
                        this.form.address !== '' &&
                        this.form.companyName !== '' &&
                        this.form.businessTurn !== ''
                    ){
                        const params = {
                            companyName: this.form.companyName,
                            businessTurn: this.form.businessTurn,
                            name: this.form.name,
                            address: this.form.address,
                            phone: this.form.phone,
                            email: this.form.email,
                        }

                        axios.post('/newDataClient', params).then(response => {
                            alert('Tus datos se guardaron con exito, estate atento nos pondremos en contacto con tigo :)')
                        })

                        this.form.email = '';
                        this.form.phone = '';
                        this.form.name = '' ;
                        this.form.address = '';
                        this.form.companyName = '';
                        this.form.businessTurn = '';
                    } else {
                        alert('Por favor, llene los campos')
                    }
                }catch (e) {
                    alert(e)
                }
            },
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

.form__content--btnColor{
    background-color: #996AFA;
    color: #ffffff;
}

</style>
