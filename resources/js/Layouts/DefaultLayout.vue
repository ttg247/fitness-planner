<script setup>
    import { reactive, provide } from 'vue'

    import AppHeader from '@/components/layout/Header.vue'
    import AppSidebar from '@/components/layout/AppSidebar.vue'
    import RightSidebar from '@/components/layout/RightSidebarChat.vue'
    import ChatPanel from '@/components/layout/ChatPanel.vue'
    import AppFooter from '@/components/layout/Footer.vue'
    import EditableLayoutModal from '@/components/layout/EditableLayoutModal.vue'
    import AppsModal from '@/components/layout/AppsModal.vue'
    // This holds chat visibility and selected user info
    const chatState = reactive({
        isVisible: false,
        selectedUser: null,
    })

    provide('chatState', chatState)
</script>

<template>
    <div class="wrapper">
        <!-- Header -->
        <AppHeader />

        <div class="page-wrap">
            <!-- Sidebar -->
            <AppSidebar />

            <!-- Main Content -->
            <div class="main-content">
                <RouterView />
            </div>

            <!-- Right Sidebar -->
            <RightSidebar />

            <!-- Chat Panel -->
            <ChatPanel v-if="isChatVisible" :visible="true" @close="isChatVisible = false" />

            <!-- Footer -->
            <AppFooter />
        </div>
    </div>

    <EditableLayoutModal />

    <AppsModal />

</template>
