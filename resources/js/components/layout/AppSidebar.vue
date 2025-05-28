<script setup>
import { computed } from 'vue'
import { useRoute, useRouter } from 'vue-router'

const route = useRoute()
const router = useRouter()

const isActive = (name) => route.name === name ? 'active' : ''

// Extract sidebar-visible routes with meta info
const sidebarRoutes = computed(() => {
	return router
		.getRoutes()
		.filter(
			(r) =>
				r.meta?.showInSidebar &&
				r.meta?.title &&
				r.name && // only named routes
				!r.path.includes(':') // skip dynamic 404 catch-all
		)
		.sort((a, b) => (a.meta.order || 0) - (b.meta.order || 0))
})
</script>

<template>
	<div class="app-sidebar colored">
		<div class="sidebar-header">
			<router-link class="header-brand" to="/">
				<div class="logo-img">
					<img src="src/img/brand-white.svg" class="header-brand-img" alt="lavalite" />
				</div>
				<span class="text">Fitness</span>
			</router-link>
		</div>

		<div class="sidebar-content">
			<div class="nav-container">
				<nav id="main-menu-navigation" class="navigation-main">
					<div class="nav-lavel">Navigation</div>

					<div
						class="nav-item"
						v-for="r in sidebarRoutes"
						:key="r.name"
					>
						<router-link
							:to="{ name: r.name }"
							:class="isActive(r.name)"
						>
							<i :class="r.meta.icon || 'ik ik-circle'"></i>
							<span>{{ r.meta.title }}</span>
						</router-link>
					</div>

				</nav>
			</div>
		</div>
	</div>
</template>

<style scoped>
/* Optional active class styling */
.router-link-exact-active,
.active {
	background-color: rgba(255, 255, 255, 0.1);
	font-weight: bold;
}
</style>
