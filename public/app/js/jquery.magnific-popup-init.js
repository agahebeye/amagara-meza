$(document).ready(function () {
    $("#add-patient-btn").magnificPopup({
        type: "inline",
        preloader: false,
        focus: "#name",
        // When elemened is focused, some mobile browsers in some cases zoom in
        // It looks not nice, so we disable it:
        callbacks: {
            beforeOpen: function () {
                if ($(window).width() < 700) {
                    this.st.focus = false;
                } else {
                    this.st.focus = "#name";
                }
            },
        },
    });

    $("#add-patient-form").on("submit", function (e) {
        e.preventDefault();
        $.magnificPopup.instance.close();
        console.log(new FormData(this));
    });
});
