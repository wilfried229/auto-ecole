
$(document).ready(function() {

    var note = parseInt($('#note').val());
    $(".my-progress-bar").circularProgress({
        line_width: 10,
        color: "orange",
        starting_position: 0, // 12.00 o' clock position, 25 stands for 3.00 o'clock (clock-wise)
        percent: 0, // percent starts from
        percentage: true,
        text: "NOTES",
}).circularProgress('animate',note,5000);
});
