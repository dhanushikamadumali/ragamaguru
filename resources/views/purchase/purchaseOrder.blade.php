@extends('layouts.main.master')

@section('content')


<style>
.action-icons {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}

.action-icon {
    display: inline-block;
    width: 36px; 
    height: 36px; 
    line-height: 36px; 
    text-align: center;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-right: 5px; 
}

.edit-icon {
    background-color: #f0f0f0; 
}

.delete-icon {
    background-color: #f8d7da; 
}

</style>

<main role="main" class="main-content">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="row mb-2">
                    <div class="col-md-6">
                        <h2 class="page-title">Purchase Order Requests</h2>
                    </div>
                </div>
                <p class="card-text"></p>
                <div class="row my-4">
                    <!-- Small table -->
                    <div class="col-md-12">
                        <div class="card shadow">
                            <div class="card-body">
                                <!-- table -->
                                <table class="table datatables" id="dataTable-1">
                                    <thead>
                                        <tr>
                                            <th style="color: black;">#</th>
                                            <th style="color: black;">Order Request Code</th>
                                            <th style="color: black;">Supplier code</th>
                                            <th style="color: black;">Date</th>
                                            <th style="color: black;">Status</th>
                                            <th class="text-center" style="color: black;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($purchase_list as  $index => $purchase)
                                        <tr>
                                            <td><?= $index + 1 ?></td>
                                            <td>{{$purchase->request_code}}</td>
                                            <td>{{$purchase->supplier_code}}</td>
                                            <td>{{$purchase->date}}</td>
                                            <td>
                                                @if ($purchase->status == 0)
                                                <span>Pending</span>
                                                @elseif ($purchase->status == 1)
                                                <span>Received</span>
                                                @else
                                                <span class="badge badge-secondary">Unknown</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action-icons">
                                                    <a href="{{ route('purchase.show', $purchase->request_code) }}" class="action-icon edit-icon" title="View">
                                                        <i class="fe fe-clipboard text-primary"></i>
                                                    </a>
                                                    
                                                    <form id="delete-form-{{ $purchase->id }}" action="{{ route('purchase.destroy', $purchase->id) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="button" class="action-icon delete-icon" onclick="confirmDelete('{{ $purchase->id }}')" title="Delete">
                                                            <i class="fe fe-trash-2 text-danger"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>                                         
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this Purchase order request?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" id="confirmDeleteButton">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection

@section('scripts')
<script>
    function confirmDelete(purchaseId) {
        const deleteForm = document.getElementById('delete-form-' + purchaseId);
        const confirmDeleteButton = document.getElementById('confirmDeleteButton');

        $('#deleteModal').modal('show');

        confirmDeleteButton.onclick = function() {
            deleteForm.submit();
        }
    }
</script>
@endsection
