<style>
    .bottom-nav {
        position: fixed;
        bottom: 15px;
        left: 50%;
        transform: translateX(-50%);
        background: #151922;
        border-radius: 30px;
        padding: 10px 20px;
        display: flex;
        gap: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
    }

    .nav-item {
        color: #a0a4ab;
        font-size: 18px;
        transition: 0.3s;
    }

    .nav-item.active,
    .nav-item:hover {
        color: #f5c542;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .actions {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    .back {
        cursor: pointer;
        font-size: 36px;
        opacity: .8;
    }

    .back:hover {
        opacity: 1;
    }
</style>
<div class="bottom-nav">
    <?php
    $currentPage = $page ?? '';
    ?>

    <?php $active = ($currentPage === 'crypto') ? 'active' : ''; ?>
    <a href="../crypto/" class="nav-item <?php echo $active; ?>">🏠</a>
    <?php $active = ($currentPage === 'market') ? 'active' : ''; ?>
    <a href="market.php" class="nav-item <?php echo $active; ?>">📊</a>
    <?php $active = ($currentPage === 'promotion') ? 'active' : ''; ?>
    <a href="promotion.php" class="nav-item <?php echo $active; ?>">💎</a>
    <?php $active = ($currentPage === 'offers') ? 'active' : ''; ?>
    <a href="offers.php" class="nav-item <?php echo $active; ?>">🏷️</a>
    <?php $active = ($currentPage === 'wallet') ? 'active' : ''; ?>
    <a href="wallet.php" class="nav-item <?php echo $active; ?>">👛</a>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".back").forEach(btn => {
            btn.addEventListener("click", () => history.back());
        });
    });
</script>