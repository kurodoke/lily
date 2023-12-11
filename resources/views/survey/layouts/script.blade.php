<script>
    $(document).ready(function() {
        $('html, body').animate({
            scrollTop: 0
        }, 'fast');
    });
</script>

<script>
    const starPlayer = document.querySelector("lottie-player");
    document.getElementById('survey_submit').addEventListener('click', function (e) {
        e.preventDefault();
        starPlayer.style.display = 'block';
        starPlayer.play();
    });

    starPlayer.addEventListener('complete', function (e) {
        $('form').submit();
    });
</script>

<script>
    $(document).ready(function() {
        document.querySelector('.container').style.opacity = '1';
    });
</script>

<script>
    var currentPage = 1;
    var isAnimate = false;
    var maxPage = $('.survey-item').length;

    $('#scroll-top').on('click', function(e) {
        e.preventDefault();
        if (!isAnimate && currentPage - 1 !== 0) {
            isAnimate = true;
            $('html, body').animate({
                scrollTop: $(`#${currentPage-1}`).offset().top
            }, {
                duration: 700,
                easing: 'swing',
                complete: function() {
                    isAnimate = false;
                }
            });
            currentPage = currentPage - 1;
        }
    });
    $('#scroll-bottom').on('click', function(e) {
        e.preventDefault();
        if (!isAnimate && currentPage + 1 !== maxPage + 1) {
            isAnimate = true;
            $('html, body').animate({
                scrollTop: $(`#${currentPage+1}`).offset().top
            }, {
                duration: 700,
                easing: 'swing',
                complete: function() {
                    isAnimate = false;
                }
            });
            currentPage = currentPage + 1;
        }
    });
</script>

<script>
    function checkSurveyCompletion() {
        var surveyItems = document.querySelectorAll('.survey-item');

        var allItemsCompleted = true;

        surveyItems.forEach(function (item) {
            var selectedOptions = item.querySelectorAll('input:checked');
            
            if (selectedOptions.length === 0) {
                allItemsCompleted = false;
            }
        });

        document.getElementById('survey_submit').disabled = !allItemsCompleted;
    }

    var inputs = document.querySelectorAll('.survey-item input');
    inputs.forEach(function (input) {
        input.addEventListener('change', checkSurveyCompletion);
    });
</script>


