<template>
    <div>
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0 text-dark">All Clients</h4>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <button class="btn btn-success float-right" data-toggle="modal" data-target="#create_category_modal"><i class="fas fa-plus-circle"></i> Create</button>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                            <table class="table table-bordered table-striped data_table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr v-for="(client, key) in clients" :key="client.id">
                                        <td>{{ client.name }}</td>
                                        <td>{{ client.email }}</td>
                                        <td>{{ client.phone }}</td>
                                        <td>{{ client.address }}</td>
                                        <td>
                                            <button class="btn btn-warning" data-toggle="modal" data-target="#edit_category_modal"><i class="fas fa-pencil-alt"></i> Edit</button>
                                            <button class="btn btn-danger" data-toggle="modal" data-target="#delete_category_modal"><i class="fas fa-trash"></i> Delete</button>
                                        </td>
                                    </tr>
                                </tbody>                      
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="modal fade" tabindex="-1" id="create_category_modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-default" role="document">
                <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title text-center w-100">Create New Client</h5>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Name <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Email <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>    

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Phone <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Address <span class="text-danger" title="Required">*</span></label>                        
                            <textarea class="form-control" name="address" placeholder="Address.." rows="3" required=""></textarea>
                            <span class="errorName text-danger text-bold"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Save</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="edit_category_modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-default" role="document">
                <div class="modal-content">
                <form action="" method="POST">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title text-center w-100">Edit Client</h5>
                    </div>
                    <div class="modal-body"> 
                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Name <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Name" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Email <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="Email" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>    

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Phone <span class="text-danger" title="Required">*</span></label>
                            <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            <span class="errorName text-danger text-bold"></span>
                        </div>

                        <div class="form-group" style="margin-bottom: 5px;">
                            <label class="col-form-label">Address <span class="text-danger" title="Required">*</span></label>                        
                            <textarea class="form-control" name="address" placeholder="Address.." rows="3" required=""></textarea>
                            <span class="errorName text-danger text-bold"></span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="modal fade" tabindex="-1" id="delete_category_modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-default" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title text-center w-100">Delete Confirmation</h5>
                    </div>
                    <div class="modal-body">
                        <h3 class="text-center">Are you sure to delete ?</h3>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success">Delete</button>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
    </div>    
</template>
<script>
    export default {
        name : 'Client',
        data(){
            return {
                clients:{},
            }
        },
        mounted() {
            document.title = this.$route.meta.title;
            this.getClients();
        },
        methods:{
            getClients(){
                let uri = this.$base_path+'clients';
                this.$axios.get(uri)
                .then( (response) => {
                   this.clients = response.data;
                })
                .catch( (response) => {
                    console.log('error');
                });
            }
        }
    }
</script>