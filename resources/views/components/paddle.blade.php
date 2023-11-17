<script src="https://cdn.paddle.com/paddle/v2/paddle.js"></script>
<script type="text/javascript">
    Paddle.Environment.set("sandbox");
    Paddle.Setup({
        token: "{{ config('paddle.client_side_token') }}"
    });
</script>
