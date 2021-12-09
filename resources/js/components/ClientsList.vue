<template>
    <div>
        <div class="clientList__title">
            Clientes Solicitantes
        </div>

        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre Empresa</th>
                        <th scope="col">Actividad</th>
                        <th scope="col">Nombre Solicitante</th>
                        <th scope="col">Domicilio</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Correo</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="client in clients" :key="client.id">
                        <th>{{ client.companyName }}</th>
                        <td>{{ client.businessTurn }}</td>
                        <td>{{ client.name }}</td>
                        <td>{{ client.address }}</td>
                        <td>{{ client.phone }}</td>
                        <td>{{ client.email }}</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</template>

<script>
export default {
    name: "ClientsList",
    data: () => ({
        clients: {},
    }),

    async mounted() {
        let request = await axios.get('/dataClients');

        this.clients = request.data
        console.log(this.clients)
    }
}
</script>

<style scoped>

.clientList__title{
    width: 100%;
    text-align: center;
    margin: 0 0 .5rem;
    font-size: 1.5rem;
    font-weight: bold;
}

</style>
