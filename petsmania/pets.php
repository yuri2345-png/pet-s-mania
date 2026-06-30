<?php 
include 'config.php'; 
include 'header.php'; 
?>

<div class="container">
    <h1>Nossos Pets</h1>
    <p>Encontre o companheiro perfeito para a sua família em Turmalina, MG:</p>
    
    <div class="pet-grid">
        <!-- Seção Cães -->
        <div class="pet-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTItJ8MwvK8BohFEE7IqVDTeFqGLwknlemNdA&s" alt="Cãozinho fofo" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
            <h2> Cães</h2>
            <p>Amigos leais, protetores e cheios de energia esperando por você.</p>
        </div>
        
        <!-- Seção Gatos -->
        <div class="pet-card">
            <img src="https://marketplace.canva.com/MAASsdsMY0g/1/thumbnail_large-1/canva-kitten-%281-month-old%29-MAASsdsMY0g.png" alt="Gatinho fofo" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
            <h2> Gatos</h2>
            <p>Companheiros independentes, carinhosos e fascinantes para o seu lar.</p>
        </div>
        
        <!-- Seção Aves -->
        <div class="pet-card">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS68CVSLjMU7NfcIJfcn-A1z24SLnFe7MEN5g&s" alt="Calopsita fofa" style="width: 100%; height: 200px; object-fit: cover; border-radius: 6px; margin-bottom: 15px;">
            <h2> Aves</h2>
            <p>Cante a vida com mais alegria tendo uma linda ave em sua casa.</p>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
