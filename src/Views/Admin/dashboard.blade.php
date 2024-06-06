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

<div class="columns">
    <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="images/masjid/masjid-terapung.jpg" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content">
                <div class="media">
                    <div class="media-left">
                        <figure class="image is-48x48">
                            <img src="images/user.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="media-content">
                        <p class="title is-4">Fulan Bin Fulan</p>
                        <p class="subtitle is-6">@fulanBinFulan</p>
                    </div>
                </div>

                <div class="content">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                    <a href="#">#css</a> <a href="#">#responsive</a>
                    <br>
                    <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="images/masjid/mesjid-raya.jpg" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content is-paddingless">
                <table class="table is-fullwidth is-hoverable">
                    <tbody>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                Three
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                Five
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                Seven
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                Ten
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-book"></i>
                                </span>
                                Twelve
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="card">
            <div class="card-image">
                <figure class="image is-4by3">
                    <img src="images/masjid/mosq3.jpg" alt="Placeholder image">
                </figure>
            </div>
            <div class="card-content is-paddingless">
                <table class="table is-fullwidth is-hoverable">
                    <tbody>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                Muhammad ibn ʿAbdullāh (PBUH)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                Abu Bakar As Shidiq
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                Umar Bin Khattab
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                Usman Bin Affan
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <span class="icon">
                                    <i class="fa fa-user"></i>
                                </span>
                                Said Bin zaid
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
