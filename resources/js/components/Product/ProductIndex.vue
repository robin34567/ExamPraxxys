<template>
    <div class="row">
        <section class="content">
            <div class="box box-primary">
                <div class="box-body">
                    <table id="productID" class="table table-hover table-bordered" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Date Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(fragment,i) in data" :key="i">
                                <td>{{ fragment.Name }}</td> 
                                <td>{{ fragment.Category }}</td>
                                <td>{{ fragment.Description }}</td>
                                <td>{{ fragment.DateTime }}</td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</template>

<script>
import axios from '../axios'
import DataTable from "@andresouzaabreu/vue-data-table";
// import 'bootstrap/dist/css/bootstrap.min.css';
// import 'jquery/dist/jquery.min.js';
// import "datatables.net-dt/js/dataTables.dataTables"
// import "datatables.net-dt/css/jquery.dataTables.min.css"
// import "bootstrap/dist/css/bootstrap.min.css";
// import "@andresouzaabreu/vue-data-table/dist/DataTable.css";
// import $ from 'jquery'; 

export default {
    name: 'app',
    components:{
      DataTable  
    },
    data() {
        return{
            data:[]
        }
    },
    mounted() {
        this.fetchData();
    },
    methods: {
        async fetchData(params = {}) {
            await axios.get('/products')
            .then(response => {
                this.data = response.data.data;
                $('#productID').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': true,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                });
            })
        }
    },
}
</script>