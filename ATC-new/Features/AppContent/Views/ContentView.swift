import SwiftUI

struct ContentView: View {
    @StateObject private var viewModel = AppContentViewModel()
    
    var body: some View {
        NavigationView {
            Group {
                if viewModel.isLoading {
                    LoadingView()
                } else {
                    ScrollView {
                        LazyVStack(spacing: 24) {
                            if let intro = viewModel.intro {
                                IntroView(intro: intro)
                                    .transition(.opacity)
                            }
                            
                            LazyVGrid(columns: [
                                GridItem(.flexible(), spacing: 16),
                                GridItem(.flexible(), spacing: 16)
                            ], spacing: 16) {
                                ForEach(viewModel.sections, id: \.title) { section in
                                    SectionCardView(section: section)
                                        .transition(.scale.combined(with: .opacity))
                                }
                            }
                            .padding(.horizontal)
                        }
                    }
                }
            }
            .navigationTitle("ATC Training")
            .task {
                await viewModel.loadContent()
            }
            .alert("Error Loading Content", isPresented: .constant(viewModel.error != nil)) {
                Button("Retry") {
                    Task {
                        await viewModel.loadContent()
                    }
                }
            } message: {
                Text(viewModel.error?.localizedDescription ?? "Unknown error")
            }
        }
    }
} 