<script src="{{ asset('assets/admin/js/app.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js"
    integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="{{ asset('assets/admin/vendor/datatables-bulma/datatables-bulma.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-sparklines/2.1.2/jquery.sparkline.min.js"
    integrity="sha512-3PRVLmoBYuBDbCEojg5qdmd9UhkPiyoczSFYjnLhFb2KAFsWWEMlAPt0olX1Nv7zGhDfhGEVkXsu51a55nlYmw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.js"
    integrity="sha512-ZwR1/gSZM3ai6vCdI+LVF1zSq/5HznD3ZSTk7kajkaj4D292NLuduDCO1c/NT8Id+jE58KYLKT7hXnbtryGmMg=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        var table = $('#datatable').DataTable({
            dom: "<'columns table-wrapper'<'column is-12'tr>><'columns table-footer-wrapper'<'column is-5'i><'column is-7'p>>"
        });

        $('#table-search').on('keyup', function() {
            let value = $(this).val();
            table.search(value).draw();
        });

        $('#table-length').on('change', function() {
            let value = $(this).val();
            table.page.len(value).draw();
        });

        $('#table-reload').on('click', function() {
            table.draw();
        });

        let bar = {
            type: 'bar',
            height: 40,
            barWidth: 4,
            barColor: '#fff',
            barSpacing: 3
        };

        let line = {
            type: 'line',
            width: 150,
            height: 36,
            lineColor: '#fff',
            fillColor: 'rgba(0,0,0,0)',
            lineWidth: 2,
            maxSpotColor: 'rgba(255,255,255,0.4)',
            minSpotColor: 'rgba(255,255,255,0.4)',
            spotColor: 'rgba(255,255,255,0.4)',
            spotRadius: 3,
            highlightSpotColor: '#fff',
            highlightLineColor: 'rgba(255,255,255,0.4)'
        };

        function data(length = 22) {
            return Array.from({
                length
            }, () => Math.floor(Math.random() * 40));
        }

        $('.inlinesparkline-bar').each(function() {
            $(this).sparkline(data(), bar);
        });

        $('.inlinesparkline-line').each(function() {
            $(this).sparkline(data(), line);
        });

        var ctx1 = document.getElementById('chart2').getContext('2d');
        window.myBar = new Chart(ctx1, {
            type: 'bar',
            data: {
                "labels": ["January", "February", "March", "April", "May", "June", "July"],
                "datasets": [{
                    "label": "Dataset 1",
                    "backgroundColor": "rgb(255, 99, 132)",
                    "stack": "Stack 0",
                    "data": data(8)
                }, {
                    "label": "Dataset 2",
                    "backgroundColor": "rgb(54, 162, 235)",
                    "stack": "Stack 0",
                    "data": data(8)
                }, {
                    "label": "Dataset 3",
                    "backgroundColor": "rgb(75, 192, 192)",
                    "stack": "Stack 1",
                    "data": data(8)
                }]
            },
            options: {
                title: {
                    display: false,
                },
                tooltips: {
                    mode: 'index',
                    intersect: false
                },
                responsive: true,
                scales: {
                    x: {
                        stacked: true,
                    },
                    y: {
                        stacked: true
                    }
                },
                legend: {
                    display: false
                },
            }
        });

        var ctx2 = document.getElementById('chart1').getContext('2d');
        window.myLine = new Chart(ctx2, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                datasets: [{
                    backgroundColor: 'rgba(255, 99, 132, 0.5)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: data(8),
                    label: 'Dataset',
                    fill: 'start'
                }]
            },
            options: {
                title: {
                    display: false
                },
                legend: {
                    display: false
                },
            }
        });
    });
</script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-4TVE6RNN41"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-4TVE6RNN41');
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "https://www.nafplann.com/",
        "name": "Abdul Manaaf | Fullstack Web Developer",
        "author": "Abdul Manaaf",
        "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4",
        "description": "Abdul Manaaf is a Fullstack Web Developer from Indonesia",
        "sameAs": ["https://www.facebook.com/nafplann", "https://instagram.com/nafplann", "https://twitter.com/nafplann", "https://id.linkedin.com/in/nafplann", "https://github.com/nafplann"]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Person",
        "email": "mailto:nafplann@gmail.com",
        "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4",
        "jobTitle": "Fullstack Web Developer",
        "name": "Abdul Manaaf",
        "url": "https://www.nafplann.com/",
        "sameAs": ["https://www.facebook.com/nafplann", "https://instagram.com/nafplann", "https://twitter.com/nafplann", "https://id.linkedin.com/in/nafplann", "https://github.com/nafplann"]
    }
</script>

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "item": {
                    "@id": "https://nafplann.com/",
                    "name": "Home",
                    "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4"
                }
            },
            {
                "@type": "ListItem",
                "position": 2,
                "item": {
                    "@id": "https://nafplann.com/bulma-admin/",
                    "name": "free-bulma-admin-dashboard-template",
                    "image": "https://avatars3.githubusercontent.com/u/7114259?s=460&v=4"
                }
            }
        ]
    }
</script>
