@section('script')

<script>
    let kt_game_chart__elm = $('#kt_game_chart')

    let game_chart_options = {
        type: "doughnut",
        data: {
            datasets: [{
                data: [
                    {{count($games->where('score', 1))}}, 
                    {{count($games->where('score', 2))}}, 
                    {{count($games->where('score', 3))}},
                    {{count($games->where('score', 4))}},
                    {{count($games->where('score', 5))}}],
                backgroundColor: ["#ecd0df", "#b0bfd2", "#9ebf88", "#e4e6ef", "#ffad0f"]
            }],
            labels: ["score 1", "score 2", "score 3", "score 4", "score 5"]
        },
        options: {
            chart: {
                fontFamily: "inherit"
            },
            cutout: "75%",
            cutoutPercentage: 65,
            responsive: !0,
            maintainAspectRatio: !1,
            title: {
                display: !1
            },
            animation: {
                animateScale: !0,
                animateRotate: !0
            },
            tooltips: {
                enabled: !0,
                intersect: !1,
                mode: "nearest",
                bodySpacing: 5,
                yPadding: 10,
                xPadding: 10,
                caretPadding: 0,
                displayColors: !1,
                backgroundColor: "#20D489",
                titleFontColor: "#ffffff",
                cornerRadius: 4,
                footerSpacing: 0,
                titleSpacing: 0
            },
            plugins: {
                legend: {
                    display: !1
                }
            }
        }
    }

    let chart  = new Chart(kt_game_chart__elm, game_chart_options)
</script>

@endsection
