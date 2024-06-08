@extends('layouts.master')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="columns">
    <div class="column">
        <div class="box quick-stats has-background-primary has-text-white">
            <div class="quick-stats-icon">
                <span class="icon is-large">
                    <i class="fa fa-3x fa-users"></i>
                </span>
            </div>
            <div class="quick-stats-content">
                <h3 class="title is-4">Users</h3>
                <div class="inlinesparkline-bar"></div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box quick-stats has-background-info has-text-white">
            <div class="quick-stats-icon">
                <span class="icon is-large">
                    <i class="fa fa-3x fa-server"></i>
                </span>
            </div>
            <div class="quick-stats-content">
                <h3 class="title is-4">Server</h3>
                <div class="inlinesparkline-bar"></div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box quick-stats has-background-danger has-text-white">
            <div class="quick-stats-icon">
                <span class="icon is-large">
                    <i class="fa fa-3x fa-chart-bar"></i>
                </span>
            </div>
            <div class="quick-stats-content">
                <h3 class="title is-4">Revenue</h3>
                <div class="inlinesparkline-line"></div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="box quick-stats has-background-warning has-text-white">
            <div class="quick-stats-icon">
                <span class="icon is-large">
                    <i class="fa fa-3x fa-bell"></i>
                </span>
            </div>
            <div class="quick-stats-content">
                <h3 class="title is-4">Alert</h3>
                <div class="inlinesparkline-line"></div>
            </div>
        </div>
    </div>
</div>

<div class="columns">
    <div class="column">
        <div class="card mb-0">
            <div class="card-content">
                <p class="title is-4">Visits</p>
                <canvas id="chart1"></canvas>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card mb-0">
            <div class="card-content">
                <p class="title is-4">Conversion</p>
                <canvas id="chart2"></canvas>
            </div>
        </div>
    </div>
</div>

<table style="text-align: center" class="table is-bordered is-striped is-narrow is-hoverable is-fullwidth">
    <thead>
        <tr>
            <th>Tên danh mục</th>
        <th>Số lượng bài viết</th>
        <th>Số lượng lượt xem</th>
        <th>Số lượng lượt xem ít nhất trong một bài viết</th>
        <th>Số lượng lượt xem nhiều nhất trong một bài viết</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($datas as $data)
           <tr>
            <td>{{ $data['c_name'] }}</td>
            <td>{{ $data['post_count'] }}</td>
            <td>{{ $data['total_views'] }}</td>
            <td>{{ $data['min_views'] }}</td>
            <td>{{ $data['max_views'] }}</td>
           </tr>
        @endforeach
    </tbody>
</table>
@endsection
