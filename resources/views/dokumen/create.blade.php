<style>
    header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        font-weight: bold;
    }

    .right_content {
        order: 2;
    }

    .table-container {
        margin-top: 20px;
    }

    .table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
    }

    .table-header .btn-group {
        margin-right: 10px;
    }

    .table-header .btn {
        margin-right: 5px;
    }

    .table-body {
        margin-top: 20px;
    }

    .table-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px;
        border-bottom: 1px solid #ccc;
    }

    .table-cell {
        width: 20%;
        text-align: left;
    }

    .table-cell:first-child {
        width: 10%;
    }

    .table-cell:last-child {
        width: 20%;
        text-align: right;
    }

    .table-cell input {
        width: 100%;
        padding: 5px;
        border: 1px solid #ccc;
    }

    .table-cell input:disabled {
        background-color: #f2f2f2;
    }

    .table-cell button {
        padding: 5px 10px;
        border: none;
        background-color: #007bff;
        color: #fff;
        cursor: pointer;
    }
</style>

<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active">Daftar Dokumen</li>
                    </ol>
                </div>
                <h4 class="page-title">Daftar Dokumen</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
