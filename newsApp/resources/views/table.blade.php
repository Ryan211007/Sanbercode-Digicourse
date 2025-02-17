@extends('layouts.master')

@section('title', 'Table')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Table</h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th>Label</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1.</td>
                    <td>Update software</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-primary" style="width: 55%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-primary">55%</span></td>
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Clean database</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" style="width: 70%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-danger">70%</span></td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Cron job running</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-success" style="width: 30%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-success">30%</span></td>
                </tr>
                <tr>
                    <td>4.</td>
                    <td>Fix and squish bugs</td>
                    <td>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-warning" style="width: 90%"></div>
                        </div>
                    </td>
                    <td><span class="badge bg-warning">90%</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection