<?php 
include 'config.php'; 
include 'header.php'; 
?>

<div class="container">
    <h1>Rações e Nutrição</h1>
    <p>Confira as melhores marcas de ração direto do nosso estoque para o seu pet:</p>
    
    <div class="pet-grid">
        <?php
        // Busca as rações cadastradas no banco de dados
        $sql = "SELECT * FROM racoes";
        $result = $conn->query($sql);

        if ($result && $result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<div class='pet-card'>";
                echo "<h3>" . htmlspecialchars($row['nome']) . "</h3>";
                echo "<p><strong>Marca:</strong> " . htmlspecialchars($row['marca']) . "</p>";
                echo "<p><strong>Indicado para:</strong> " . htmlspecialchars($row['tipo_animal']) . "</p>";
                echo "<p style='color: #ff9900; font-weight: bold; font-size: 18px;'>R$ " . number_format($row['preco'], 2, ',', '.') . "</p>";
                echo "</div>";
            }
        } else {
            echo "<p>Nenhuma ração cadastrada no momento.</p>";
        }
        ?>
    </div>
</div>

<?php include 'footer.php'; ?>
