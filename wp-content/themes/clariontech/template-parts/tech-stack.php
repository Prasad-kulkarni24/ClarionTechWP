<?php
/**
 * Python AI Tech Stack Section — 9th fold
 */
$theme_uri = get_template_directory_uri();
?>
<section class="tech-stack-section" id="tech-stack" aria-labelledby="ts-heading">
    <div class="container">

        <div class="ts-header">
            <h2 class="ts-heading" id="ts-heading">
                The Python AI <span class="text-orange">Tech Stack</span>
            </h2>
            <p class="ts-description">
                Every tool here has been deployed inside live production environments across healthcare platforms, financial systems, and industrial automation, chosen for enterprise reliability.
            </p>
        </div>

        <div class="ts-grid">

            <!-- Row 1: 3 columns -->
            <div class="ts-cell ts-cell--languages">
                <p class="ts-category-label">LANGUAGES</p>
                <div class="ts-logos ts-logos--centered">
                    <img src="<?php echo esc_url( $theme_uri ); ?>/logo-python.png"
                         alt="Python" class="ts-logo ts-logo--large">
                </div>
            </div>

            <div class="ts-cell ts-cell--frameworks">
                <p class="ts-category-label">FRAMEWORKS</p>
                <div class="ts-logos">
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-langchain.png"
                             alt="LangChain" class="ts-logo">
                        <figcaption>LangChain</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-tensorflow.png"
                             alt="TensorFlow" class="ts-logo">
                        <figcaption>TensorFlow</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-semantic-kernel.png"
                             alt="Semantic Kernel" class="ts-logo">
                        <figcaption>Semantic Kernel</figcaption>
                    </figure>
                </div>
            </div>

            <div class="ts-cell ts-cell--ai-models">
                <p class="ts-category-label">AI MODELS &amp; APIS</p>
                <div class="ts-logos">
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-huggingface.png"
                             alt="Hugging Face" class="ts-logo">
                        <figcaption>Hugging Face</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-openai.png"
                             alt="OpenAI" class="ts-logo">
                        <figcaption>OpenAI</figcaption>
                    </figure>
                </div>
            </div>

            <!-- Row 2: 2 columns -->
            <div class="ts-cell ts-cell--libraries">
                <p class="ts-category-label">LIBRARIES</p>
                <div class="ts-logos">
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-pytorch.png"
                             alt="PyTorch" class="ts-logo">
                        <figcaption>PyTorch</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-spacy.png"
                             alt="spaCy" class="ts-logo">
                        <figcaption>spaCy</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-nltk.png"
                             alt="NLTK" class="ts-logo">
                        <figcaption>NLTK</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-opencv.png"
                             alt="OpenCV" class="ts-logo">
                        <figcaption>OpenCV</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-scikit-learn.png"
                             alt="scikit-learn" class="ts-logo">
                        <figcaption>scikit-learn</figcaption>
                    </figure>
                </div>
            </div>

            <div class="ts-cell ts-cell--dev-orchestration">
                <p class="ts-category-label">DEVELOPMENT ORCHESTRATION</p>
                <div class="ts-logos">
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-copilot-studio.png"
                             alt="Copilot Studio" class="ts-logo">
                        <figcaption>Copilot Studio</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-langchain.png"
                             alt="LangChain" class="ts-logo">
                        <figcaption>LangChain</figcaption>
                    </figure>
                    <figure class="ts-logo-item">
                        <img src="<?php echo esc_url( $theme_uri ); ?>/logo-semantic-kernel.png"
                             alt="Semantic Kernel" class="ts-logo">
                        <figcaption>Semantic Kernel</figcaption>
                    </figure>
                </div>
            </div>

        </div><!-- /.ts-grid -->

    </div><!-- /.container -->
</section>
