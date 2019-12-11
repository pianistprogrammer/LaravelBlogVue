<template>
 <div class="col-md-12 col-lg-4">
					<aside id="sidebar" class="sidebar">

						<div id="categories-2" class="widget widget_categories">
							<h4 class="widget-title">Categories</h4>
							<ul>
								<li class="cat-item cat-item-5" v-for="cat in allcategories" :key="cat.id">
									{{cat.name}}
								</li>
								 
							</ul>
						</div>
					</aside>
				</div>
</template>

<script>
export default {
    name:"blogsidebar",
    computed:{
        allcategories(){
            return this.$store.getters.allcategories;
        }
    },
    mounted(){
        this.$store.dispatch('allcategories');
    }
}
</script>
