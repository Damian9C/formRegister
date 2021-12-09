<template>
    <div data-app>
        <div class="clientList__title">
            Clientes Solicitantes
        </div>

        <v-simple-table>
            <template v-slot:default>
                <thead>
                    <tr>
                        <th class="text-left">Nombre Empresa</th>
                        <th class="text-left">Nombre Solicitante</th>
                        <th class="text-left">Telefono</th>
                        <th class="text-left">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                <tr
                    v-for="client in clients"
                    :key="client.id"
                >
                    <td>{{ client.companyName }}</td>
                    <td>{{ client.name }}</td>
                    <td>{{ client.phone }}</td>
                    <td>
                        <div class="text-center">
                            <v-dialog
                                v-model="dialog"
                                width="500"
                            >
                                <template v-slot:activator="{ on, attrs }">
                                    <v-btn
                                        @click="clientSelected = client"
                                        outlined
                                        small
                                        v-bind="attrs"
                                        v-on="on"
                                    >
                                        Ver Mas
                                    </v-btn>
                                </template>

                                <v-card>
                                    <v-card-title class="text-h5 grey lighten-2">
                                        Datos del Cliente<br/>
                                    </v-card-title>

                                    <v-card-text>
                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Nombre Compania:
                                            </div>
                                            {{ clientSelected.companyName }}
                                        </div>
                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Actividad:
                                            </div>
                                            {{ clientSelected.businessTurn }}
                                        </div>
                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Nombre del Solicitante:
                                            </div>
                                            {{ clientSelected.name }}
                                        </div>

                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Domicilio:
                                            </div>
                                            {{ clientSelected.address }}
                                        </div>
                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Telefono:
                                            </div>
                                            {{ clientSelected.phone }}
                                        </div>
                                        <div class="listClient">
                                            <div class="listClient__title">
                                                Email:
                                            </div>
                                            {{ clientSelected.email }}
                                        </div>
                                    </v-card-text>

                                    <v-card-actions>
                                        <v-spacer></v-spacer>
                                        <v-btn
                                            class="buttonRed"
                                            outlined
                                            color="#CA0404"
                                            @click="deleteClient"
                                        >
                                            Borrar
                                        </v-btn>
                                        <v-btn
                                            outlined
                                            color="#00AAFF"
                                            @click="dialog = false"
                                        >
                                            Cerrar
                                        </v-btn>
                                    </v-card-actions>
                                </v-card>
                            </v-dialog>
                        </div>
                    </td>
                </tr>
                </tbody>
            </template>
        </v-simple-table>



    </div>
</template>

<script>
export default {
    name: "ClientsList",
    data: () => ({
        clients: {},
        clientSelected: {
            companyName: '',
            businessTurn: '',
            name: '',
            address: '',
            phone: '',
            email: '',
        },

        algo: true,
        dialog: false,
    }),

    mounted() {
        this.getClientsData();
    },

    methods: {
        deleteClient(){
            axios.post(`/deleteClients`, {
                id: this.clientSelected.id,
            }).then(item => {
                alert('Cliente borrado')
            })

            this.dialog = false;
            this.getClientsData();

        },

        async getClientsData() {
            let request = await axios.get('/dataClients');

            this.clients = request.data
            console.log(this.clients)
        }
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

.listClient{
    color: #454545;
    margin-bottom: 1rem;
}

.listClient__title{
    font-size: 1.2rem;
}

.buttonRed{
    margin-right: 10px;
}

</style>
