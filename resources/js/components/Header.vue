<template>
    <nav class="navbar navbar-expand-md navbar-dark mx-0 bg-dark p-3">
        <div class="container-fluid justify-content-around">
            <div>
                <a :href="urlAF" class="navbar-brand">
                    <a href="{{ env('APP_URL', '#') }}">
                        <img
                            src="../../../public/images/logo-opal.svg"
                            alt="Logo Opal"
                            style="height: 75px"
                        />
                    </a>
                </a>
            </div>
            <div>
                <ul class="text-light list-group list-group-horizontal">
                    <li class="list-group mx-3">
                        <a href="" class="text-decoration-none text-light"
                            >Accueil</a
                        >
                    </li>
                    <li class="list-group mx-3">
                        <a
                            href="evenement"
                            class="text-decoration-none text-light"
                            >Évenement</a
                        >
                    </li>
                    <li class="list-group mx-3">
                        <a href="blog" class="text-decoration-none text-light"
                            >Blog</a
                        >
                    </li>
                    <li class="list-group mx-3">
                        <a
                            href="contact"
                            class="text-decoration-none text-light"
                            >Contact</a
                        >
                    </li>
                </ul>
            </div>
            <div>
                <template v-if="logged === false">
                    <a href="login" class="mx-2">
                        <button type="button" class="btn btn-primary">
                            Login
                        </button>
                    </a>
                    <a href="signIn" class="mx-2">
                        <button type="button" class="btn btn-primary">
                            Sign In
                        </button>
                    </a>
                </template>
                <a href="cart" class="mx-2">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
                <template v-if="logged === true">
                    <a href="compte" class="mx-2">
                        <i class="fa-regular fa-user"></i>
                    </a>
                    <a href="logout" class="mx-2">
                        <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    </a>
                </template>
            </div>
        </div>
    </nav>
</template>
<script>
export default {
    data: function () {
        return {
            logged: true,
            urlAF: "{{ env('APP_URL', '#') }}",
        };
    },
};
</script>
<style></style>
