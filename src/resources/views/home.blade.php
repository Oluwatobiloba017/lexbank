@extends('layouts.admin')
@section('content')

<div class="row">
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-primary border-primary">
                        <i class="fe fe-users"></i>
                    </span>
                    <div class="dash-count">
                        <h3>168</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    <h6 class="text-muted">Balance</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-primary w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-success">
                        <i class="fe fe-credit-card"></i>
                    </span>
                    <div class="dash-count">
                        <h3>487</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">Total Transfer</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-success w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-danger border-danger">
                        <i class="fe fe-star-o"></i>
                    </span>
                    <div class="dash-count">
                        <h3>485</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">Total Withdrawal</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-danger w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12">
        <div class="card">
            <div class="card-body">
                <div class="dash-widget-header">
                    <span class="dash-widget-icon text-warning border-warning">
                        <i class="fe fe-folder"></i>
                    </span>
                    <div class="dash-count">
                        <h3>$62523</h3>
                    </div>
                </div>
                <div class="dash-widget-info">
                    
                    <h6 class="text-muted">Total Deposit</h6>
                    <div class="progress progress-sm">
                        <div class="progress-bar bg-warning w-50"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
    
        <!-- Recent Orders -->
        <div class="card card-table">
            <div class="card-header">
                <h4 class="card-title">Transaction List</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-center mb-0">
                        <thead>
                            <tr>
                                <th>Sender ID</th>
                                <th>Amount</th>
                                <th>Trasaction Type</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    19829839
                                </td>
                                <td>$2000</td>
                                <td>
                                    Withdrawal
                                </td>
                                <td>
                                    9 Nov 2019 <span class="text-primary d-block">11.00 AM - 11.15 AM</span>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Recent Orders -->
        
    </div>
</div>
@endsection